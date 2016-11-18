<?php

class PaymentController extends WebsiteController {

    private $booking;

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('dopay', 'doPingxxPay', 'alipayReturn', 'yeepayReturn', 'pingxxReturn'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array(''),
                'users' => array('@'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    public function actionDoPingxxPay() {
        require_once('protected/sdk/pingpp-php-master/init.php');
        $output = new stdClass();
        //$output->status = 'no';
        $output->errorMsg = null;
        $output->pingCharge = null;
        try {
            $post = json_decode(file_get_contents('php://input'), true);
//            $post['channel'] = 'alipay_qr';
//            $post['order_no'] = 'test';
//            $post['ref_url'] = 'http://test.mingyizd.com/order/view?refno=test';
            CoreLogPayment::log('pingxxPayJson: ' . CJSON::encode($post), CoreLogPayment::LEVEL_INFO, Yii::app()->request->url, __METHOD__);
            if (isset($post['order_no'])) {
                $refNo = $post['order_no'];
                $order = new SalesOrder();
                $order = SalesOrder::model()->getByRefNo($refNo);
                if (isset($order) && $order->getIsPaid(false) == 1) {
                    throw new CException('该订单已支付');
                }
            } else {
                throw new CException('invalid parameters - missing order_no.');
            }
            if (isset($post['channel'])) {
                $channel = strtolower($post['channel']);
            } else {
                throw new CException('invalid parameters - missing channel.');
            }
            if (isset($post['ref_url'])) {
                $refurl = strtolower($post['ref_url']);
            } else {
                throw new CException('invalid parameters - missing ref_url.');
            }
            if (isset($post['open_id'])) {
                $openid = $post['open_id'];
            } else {
                $openid = '';
            }
            $payMgr = new PayManager();
            $output->pingCharge = $payMgr->doPingxxPay($refNo, $channel, $refurl, $openid);
        } catch (\Pingpp\Error\Base $e) {
            header('Status: ' . $e->getHttpStatus());
            $output->errorMsg = $e->getHttpBody();
            Yii::log($output->errorMsg, CLogger::LEVEL_ERROR, __METHOD__);
        } catch (CDbException $cdbex) {
            Header("http/1.1 404 Not Found");
            $output->errorMsg = 'error loading data';
            Yii::log($cdbex->getMessage(), CLogger::LEVEL_ERROR, __METHOD__);
        } catch (CException $cex) {
            Header("http/1.1 400 Bad Request");
            $output->errorMsg = $cex->getMessage();
            Yii::log($cex->getMessage(), CLogger::LEVEL_ERROR, __METHOD__);
        }

        if (is_null($output->errorMsg)) {
            // success.
            header('Content-Type: application/json; charset=utf-8');
            try {
                echo $output->pingCharge;
                CoreLogPayment::log($output->pingCharge, CoreLogPayment::LEVEL_INFO, Yii::app()->request->url, __METHOD__);
            } catch (\Pingpp\Error\Base $e) {
                header('Status: ' . $e->getHttpStatus());
                echo($e->getHttpBody());
                CoreLogPayment::log($e->getHttpBody(), CoreLogPayment::LEVEL_ERROR, Yii::app()->request->url, __METHOD__);
            }
        } else {
            //error.
            //var_dump($output->errorMsg);
            throw new CHttpException(404, $output->errorMsg);
        }
    }

    public function actionPingxxReturn() {
        $post = json_decode(file_get_contents('php://input'), true);
        CoreLogPayment::log('pingxxReturnJson: ' . CJSON::encode($post), CoreLogPayment::LEVEL_INFO, Yii::app()->request->url, __METHOD__);
        $payMgr = new PayManager();
        $pingChargeId = $post['data']['object']['id'];
        $orderNo = $post['data']['object']['order_no'];
        CoreLogPayment::log('orderNo: ' . $orderNo, CoreLogPayment::LEVEL_INFO, Yii::app()->request->url, __METHOD__);
        $payment = SalesPayment::model()->getByAttributes(array('uid' => $orderNo, 'ping_charge_id' => $pingChargeId), array('paymentOrder'));
        $order = $payment->paymentOrder;
        if (isset($payment) && $post['type'] == 'charge.succeeded') {
            if ($payment->payment_status == StatCode::PAY_UNPAID) {
                //交易成功
                $payMgr->updateDataAfterTradeSuccess($payment, $post);
                //推送第三方支付信息
                CoreLogPayment::log('vendorOrder: ' . CJSON::encode($order), CoreLogPayment::LEVEL_INFO, Yii::app()->request->url, __METHOD__);
                $this->sendVendor($order);
                //短信通知
                if (isset($payment->user_id)) {
                    $user = User::model()->getById($payment->user_id);
                    if (isset($user->username)) {
                        
                        $data = new stdClass();
                        $data->amount = $payment->paid_amount;
                        $data->refno = $order->ref_no;
//                        $sendMsg = new SmsManager();
//                        $sendMsg->sendSmsBookingDepositPaid($user->username, $data);
                        $rpc = new RPC();
                        $client = $rpc->rpcClient(Yii::app()->params['rpcSmsUrl']);
                        $client->sendSmsBookingDepositPaid($user->username, $order->ref_no, $payment->paid_amount);
                    }
                }
                //电邮提醒
                $apiSvc = new ApiViewSalesOrder($order->getRefNo());
                $output = $apiSvc->loadApiViewData();
                $data = $output->results;
                $emailMgr = new EmailManager();
                $emailMgr->sendEmailSalesOrderPaid($data);
                CoreLogPayment::log('电邮提醒: ' . CJSON::encode($order), CoreLogPayment::LEVEL_INFO, Yii::app()->request->url, __METHOD__);

                
            }
            //任务提醒
                $apiRequest = new ApiRequestUrl();
                $remote_url = $apiRequest->getUrlOrderPaidedTaskCreate() . '?refno=' . $order->ref_no;
                $data = $this->send_get($remote_url);
        } else if (isset($payment) && $post['type'] != 'charge.succeeded') {
            //交易失败
            $payMgr->updateDataAfterTradeFail($payment, $post);
        } else if ($payment == NULL) {
            //没有此笔交易
        }
    }

    private function sendVendor($order) {
        $adminBooking = AdminBooking::model()->getById($order->admin_booking_id);
        if ($adminBooking->booking_type == StatCode::TRANS_TYPE_BK) {
            $booking = Booking::model()->getById($adminBooking->booking_id);
            //往160推送消息
            if ($booking->vendor_id == VendorRest::VENDOR_ID_160) {
                switch ($order->order_type) {
                    case 'deposit':
                        $order_status = StatCode::BK_STATUS_PROCESSING;
                        $type = VendorRest::DEPOSIT_160;
                        $values = array(
                            'yuyue_no' => $adminBooking->ref_no,
                            'reserve_money' => $order->final_amount,
                            'reserve_no' => $order->id,
                            'reserve_time' => time(),
                            'order_no' => $order->ref_no,
                            'order_status' => $order_status,
                            'phone' => $order->patient_mobile,
                        );
                        break;
                    case 'service':
                        $order_status = StatCode::BK_STATUS_SERVICE_PAIDED;
                        $type = VendorRest::CONFIRMED_160;
                        $values = array(
                            'yuyue_no' => $adminBooking->ref_no,
                            'pay_money' => $order->final_amount,
                            'pay_no' => $order->id,
                            'pay_time' => time(),
                            'order_no' => $order->ref_no,
                            'order_status' => $order_status,
                            'phone' => $adminBooking->patient_mobile,
                        );
                        break;
                    default:
                        $order_status = StatCode::BK_STATUS_PROCESSING;
                }
                $result = VendorRest::send(VendorRest::VENDOR_ID_160, $values, $type);
            }
        }
    }

    public function actionAlipayReturn() {
        CoreLogPayment::log('AlipayReturnJson: ' . CJSON::encode($_GET), CoreLogPayment::LEVEL_INFO, Yii::app()->request->url, __METHOD__);
        $outTradeNo = $_GET['out_trade_no'];
        $payment = SalesPayment::model()->getByAttributes(array('uid' => $outTradeNo), array('paymentOrder'));

        $this->redirect(array('payResult', 'paymentcode' => $payment->uid));

        /*
          $paymentMgr = new PaymentManager();
          $payment = $paymentMgr->updateAlipayReturn();
          //$uid = $_GET['out_trade_no'];
          //$payment = $paymentMgr->loadPaymentByUID($uid);

          if (isset($payment) === false) {
          $error = new stdClass();
          $error->code = '';
          $error->msg = '请求链接不正确。';
          $this->render("error", array(
          'error' => $error
          ));
          } else {
          //TODO: redirect to payment/result instead.
          // reload payment from db.
          $payment = $paymentMgr->loadPaymentByUID($payment->getUID(), array('mrbpUser', 'mrbpBooking'));
          $ipayment = new IMrBookingPayment();
          $ipayment->initModel($payment);
          $ipayment->setBuyer($payment->getUser());
          $ipayment->setBooking($payment->getBooking());
          $this->render('return2', array(
          'payment' => $ipayment
          ));
          }
         */
    }

    public function actionYeepayReturn($outno) {
        CoreLogPayment::log('YeepayReturnJson: ' . CJSON::encode($_GET), CoreLogPayment::LEVEL_INFO, Yii::app()->request->url, __METHOD__);
        $payment = SalesPayment::model()->getByAttributes(array('uid' => $outno), array('paymentOrder'));

        $this->redirect(array('payResult', 'paymentcode' => $payment->uid));
    }

    public function actionPayResult($paymentcode) {
        $payment = SalesPayment::model()->getByAttributes(array('uid' => $paymentcode), array('paymentOrder'));
        $order = $payment->paymentOrder;
        if ($order === NULL) {
            throw new CHttpException(404, 'The requested page does not exist.');
        }
        $this->show_header = true;
        $this->show_footer = false;
        $this->show_baidushangqiao = false;

        $this->render('result', array('model' => $order));
    }

    /*
      public function actionAlipayNotify() {
      // $paymentMgr = new PaymentManager();
      // $success = $paymentMgr->updateAlipayNotify();
      //$log = CJSON::encode(Yii::app()->request);
      $log = Yii::app()->request->queryString;
      Yii::log($log);
      $success = true;
      if ($success) {
      echo 'success';
      } else {
      echo 'fail';
      }
      }
     * 
     */

    public function actionPayBooking($ref) {

        $bookingMgr = new BookingManager();
        $booking = $bookingMgr->loadBookingByRefNo($ref);

        if (isset($_POST['payment'])) {
            $paymentMgr = new PaymentManager();
            $payment = $paymentMgr->BookingPayment($booking, $payMethod);
        }
    }

    public function actionAlipay($bid) {
        $booking = $this->loadBookingById($bid, array('mrbUser', 'mrbMedicalRecord', 'mrbFaculty'));

        if (isset($_POST['payment'])) {
            $post = $_POST['payment'];
            $bookingId = $post['bid'];
            $booking = $this->loadBookingById($bookingId, array('mrbUser', 'mrbMedicalRecord', 'mrbFaculty'));
            $payMethod = 1;

            $paymentMgr = new PaymentManager();
            $payment = $paymentMgr->BookingPayment($booking, $payMethod);
            if (isset($payment)) {
                if ($payment->hasErrors() === false) {
                    $this->redirect($payment->getRequestUrl());
                    echo CHtml::link($payment->getRequestUrl(), $payment->getRequestUrl(), array('target' => '_blank'));
                } else {
                    $errors = $payment->getErrors();
                    echo CJSON::encode(array('status' => 'false', 'errors' => $errors));
                }
            } else {
                echo CJSON::encode(array('status' => 'false', 'errors' => array('访问错误')));
            }
        }
        $this->render('alipay', array(
            'booking' => $booking
        ));
    }

    public function actionAlipayInWeixin() {
        $this->renderPartial('alipayInWeixin');
    }

    public function actionTest() {
        if (isset($_POST['payment']['amt'])) {
            $amt = floatval($_POST['payment']['amt']);
            $payMethod = 1;
            $booking = new MedicalRecordBooking();
            $booking->id = 100000;
            $booking->user_id = 3;
            $booking->faculty_id = 1;
            $booking->subject = '测试付款';
            $booking->total_price = $amt;
            $booking->currency = 'RMB';

            $paymentMgr = new PaymentManager();
            $payment = $paymentMgr->BookingPayment($booking, $payMethod);
            if (isset($payment)) {
                if ($payment->hasErrors() === false) {
                    $this->redirect($payment->getRequestUrl());
                    echo CHtml::link($payment->getRequestUrl(), $payment->getRequestUrl(), array('target' => '_blank'));
                } else {
                    $errors = $payment->getErrors();
                    echo CJSON::encode(array('status' => 'false', 'errors' => $errors));
                }
            } else {
                echo CJSON::encode(array('status' => 'false', 'errors' => array('访问错误')));
            }
        }
        $this->render('test');
    }

    public function loadBookingById($id, $with = null) {
        $model = MedicalRecordBooking::model()->getById($id, $with);
        if (is_null($model)) {
            $this->throwPageNotFoundException();
        } else {
            return $model;
        }
    }

}
