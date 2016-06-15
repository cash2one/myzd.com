<?php

class OrderController extends WebsiteController {

    public function actionView() {
        $refNo = Yii::app()->request->getParam('refNo');
        if(empty($refNo)){
            $refNo = Yii::app()->request->getParam('refno');
        }
        $model = SalesOrder::model()->getByAttributes(array('ref_no' => $refno));
        $this->show_header = true;
        $this->show_footer = false;
        $this->show_baidushangqiao = false;
        //$this->render('view', array('model' => $model));
        $detect = Yii::app()->mobileDetect;
        // client is mobile and url is not mobile.
        if ($detect->isMobile()) {
            $this->redirect(Yii::app()->params['baseUrlMobileDoctor'] . '/mobiledoctor/order/view/refNo/' . $refno);
        } else {
            $this->render('viewOne', array('model' => $model));
        }
    }

    public function actionViewtest($refno) {
        $model = SalesOrder::model()->getByAttributes(array('ref_no' => $refno));
        $this->show_header = true;
        $this->show_footer = false;
        $this->show_baidushangqiao = false;
        $this->render('viewtest', array('model' => $model));
    }

    public function actionViewweb() {
        $this->render('viewweb');
    }

    //退款
    public function actionRecede() {
        $this->render('recede');
    }

    //订单评价
    public function actionEvaluate() {
        $this->render('evaluate');
    }

    //完成义诊定金支付并修改订单状态
    public function actionPayDeposit($refno) {
        $model = SalesOrder::model()->getByAttributes(array('ref_no' => $refno, 'order_type' => SalesOrder::ORDER_TYPE_DEPOSIT));
        if (isset($model)) {
            $booking = Booking::model()->getByRefNo($model->bk_ref_no);
            if ($booking->booking_service_id == BookingServiceConfig::BOOKING_SERVICE_FREE_LIINIC) {
                $adminBooking = AdminBooking::model()->getByAttributes(array('ref_no' => $model->bk_ref_no));
                $model->is_paid = SalesOrder::ORDER_PAIDED;
                $model->date_closed = new CDbExpression('NOW()');
                $booking->bk_status = StatCode::BK_STATUS_PROCESSING;
                $adminBooking->booking_status = StatCode::BK_STATUS_PROCESSING;
                $adminBooking->work_schedule = StatCode::BK_STATUS_PROCESSING;
                if ($booking->save() && $adminBooking->save() && $model->save()) {
                    $this->redirect(array('booking/userBooking', 'id' => $booking->getId()));
                }
            } else {
                $this->redirect(array('booking/userBooking', 'id' => $booking->getId()));
            }
        } else {
            throw new CException('该订单-' . $refno . ' 不存在');
        }
    }

}
