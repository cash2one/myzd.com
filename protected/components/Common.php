<?php

class Common {

    /**
     * 获取$_REQUEST
     * @param type $name
     * @return type
     */
    public static function request($name) {
        return Yii::app()->request->getParam($name);
    }

    /**
     * 获取$_REQUEST['data']并解密
     * @return type
     */
    public static function requestDate() {
        $dataTest = self::request('data_test');
        if ($dataTest) {
            return self::jsonDecode($dataTest);
        }

        $data = self::request('data');
        return self::dataDecode($data);
    }

    /**
     * 获取unix时间戳
     * @return type
     */
    public static function timestamp() {
        return time();
    }

    /**
     * 生成主键ID
     * @return integer
     */
    public static function id($id = '') {
        if ($id)
            return bcadd($id, 1);

        $length = 19;
        list ( $msec, $sec ) = explode(" ", microtime());
        $id = $sec . strval($msec * 1000000) . strval(mt_rand(0, 999));
        $addZero = $length - strlen($id);
        for ($i = 0; $i < $addZero; $i ++) {
            $id .= '0';
        }

        return $id;
    }

    /**
     * 生成随机码
     * @param integer $length
     * @return integer
     */
    public static function randomCode($legth = 6) {
        $code = '';
        for ($i = 0; $i < $legth; $i ++) {
            $code .= rand(0, 9);
        }

        return $code;
    }

    /**
     * JSON编码
     * @param type $var
     * @return type
     */
    public static function jsonEncode($var) {
        $var = self::formatData($var);
        return CJSON::encode($var);
    }

    /**
     * JSON解码
     * @param type $str
     * @param type $useArray
     * @return type
     */
    public static function jsonDecode($str, $useArray = true) {
        return CJSON::decode($str, $useArray);
    }

    /**
     * 数据加密
     * @param type $var
     * @param type $location
     * @return boolean
     */
    public static function dataEncode($var, $location = 1) {
        $str = self::jsonEncode($var);
        if ($str) {
            $str = base64_encode($str);
            $length = strlen($str);

            $before = substr($str, 0, $location);
            $after = substr($str, $location, $length);
            return base64_encode($after . $before);
        }

        return false;
    }

    /**
     * 数据解密
     * @param type $str
     * @param type $location
     * @return boolean
     */
    public static function dataDecode($str, $location = 1) {
        if ($str) {
            $str = base64_decode($str);
            $length = strlen($str);

            $location = $length - $location;
            $before = substr($str, 0, $location);
            $after = substr($str, $location, $length);
            $str = base64_decode($after . $before);
            return self::jsonDecode($str);
        }

        return false;
    }

    /**
     * 格式化数据
     * @param type $data
     * @return type
     */
    public static function formatData(&$data) {
        if (is_array($data)) {
            foreach ($data as $k => $v) {
                if (is_array($v))
                //递归调用
                    self::formatData($data [$k]);
                else
                    $data [$k] = (string) $v;
            }
        }
        return $data;
    }

    /**
     * 验证字符串为正负整数
     * @param type $string
     * @return boolean
     */
    public static function checkDigit($string) {
        if (is_array($string)) {
            foreach ($string as $v) {
                if (!self::checkDigit($v)) {
                    return false;
                }
            }
        } else {
            if (!preg_match("/^(\-[0-9]+|[0-9]+)$/", $string)) {
                return false;
            }
        }
        return true;
    }

    /**
     * 检查金额是否正确
     * @param type $price
     * @return boolean
     */
    public static function checkPrice($price) {
        if (!is_numeric($price))
            return false;

        $formatPrice = self::formatPrice($price);
        if (strlen($formatPrice) != strlen($price)) {
            return false;
        }
        return true;
    }

    /**
     * 格式化金额（保留小数点2位）
     * @param type $price
     * @return boolean
     */
    public static function formatPrice($price) {
        if (!is_numeric($price))
            return false;

        $price_array = explode('.', $price);
        if (!empty($price_array [1]))
            $price = $price_array [0] . '.' . substr($price_array [1], 0, 2);
        if ($price < 0)
            $price = $price * -1;

        return $price;
    }

    /**
     * 格式化库存
     * @param type $stock
     * @return boolean
     */
    public static function formatStock($stock) {
        if (!is_numeric($stock))
            return 0;

        if (preg_match("/^([0-9]+)$/", $stock)) {
            return $stock;
        }
        return 0;
    }

    /**
     * 获取文件后缀
     * @param type $filename
     * @return null
     */
    public static function fileSuffix($filename) {
        $suffix = explode('.', $filename);
        $count = count($suffix);
        if ($count > 1) {
            $count = $count - 1;
            return strtolower($suffix[$count]);
        }
        return null;
    }

    /**
     * 打印数据
     * @param type $data
     */
    public static function printData($data = array(), $error = 0) {
        $result = array('data' => $data, 'error' => $error);
        $result = self::jsonEncode($result);
        exit($result);
    }

    /**
     * 返回DWZ回调函数参数
     * @param Boolean $status
     * @param Boolean $message
     * @param Array $setting
     */
    public static function dwzAjaxDone($status = true, $message = true, $setting = array()) {
        $result = array("statusCode" => "", "message" => "", "navTabId" => "", "rel" => "", "callbackType" => "", "forwardUrl" => "", "confirmMsg" => "");

        if ($status == true) {
            $result ['statusCode'] = 200;
            $result ['message'] = '操作成功';
        } else {
            $result ['statusCode'] = 300;
            $result ['message'] = '操作失败';
        }

        if ($message !== true)
            $result ['message'] = $message;

        if (isset($setting ['close']) && $setting ['close'] == true)
            $result ['callbackType'] = 'closeCurrent';

        if (isset($setting ['url']) && !empty($setting ['url'])) {
            $result ['callbackType'] = 'forward';
            $result ['forwardUrl'] = $setting ['url'];
        }

        if (isset($setting ['rel']) && !empty($setting ['rel'])) {
            $result ['rel'] = $setting ['rel'];
        }

        if (isset($setting ['navTabId']) && !empty($setting ['navTabId'])) {
            $result ['navTabId'] = $setting ['navTabId'];
        }

        $result = self::jsonEncode($result);
        exit($result);
    }

    /**
     * 上传文件图片ftp
     * Enter description here ...
     */
    public static function upload_ftp($file, $path, $dir) {
        //ftp上传图片
        //$file = CUploadedFile::getInstance ( $model, $flie_name );
        //$file=CUploadedFile::getInstanceByName('licence_image');
        //$image_attribute = getimagesize ( $file->tempName );
        //上传到FTP
        $ftp = Yii::app()->ftp;
        $ftp->mkdir($dir);
        $res = $ftp->put($path, $file->tempName, FTP_BINARY);
        if ($res) {
            return $file;
        } else {
            return $res;
        }
    }

    /**
     * 上传图片
     * @param type $userId 用户ID
     * @param type $class 类别（例：user）
     * @param type $data 图片信息（例：$_FILES['image']）
     * @return string|boolean
     */
    public static function uploadImage($userId, $class, $data) {
        if (empty($userId) || empty($class) || empty($data)) {
            return false;
        }

        //验证图片格式
        $id = self::id();

        $imageType = Yii::app()->params['imageType'];
        $suffix = self::fileSuffix($data['name']);
        if (empty($imageType[$suffix])) {
            return false;
        }
        $filename = $id . '.' . $suffix;

        //进入目录
        $pathClass = Yii::app()->params['pathClass'];
        if (empty($pathClass[$class])) {
            return false;
        }
        if ($class == 'user') {
            $path = $pathClass[$class] . $userId;
        } else {
            $path = $pathClass[$class];
        }
        $ftp = Yii::app()->ftp;
        $chdir = @$ftp->chdir($path);
        if (empty($chdir)) {
            @$ftp->mkdir($path);
            $chdir = @$ftp->chdir($path);
            if (empty($chdir)) {
                return false;
            }
        }

        //上传图片
        $result = $ftp->put($filename, $data['tmp_name'], FTP_BINARY);
        if (empty($result)) {
            return false;
        }

        $imageData = array(
            'id' => $id,
            'user_id' => $userId,
            'class' => $class,
            'filename' => $filename,
            'name' => $data['name'],
            'type' => $suffix,
            'size' => $data['size'],
            'create_time' => self::timestamp(),
        );

        //插入数据库
        $imageModel = new ImageModel();
        foreach ($imageData as $k => $v) {
            $imageModel->$k = $v;
        }
        $result = $imageModel->save();
        if (empty($result)) {
            $ftp->delete($filename);
            return false;
        }

        $pathFile = $path . $filename;

        //处理图片
        $url = Yii::app()->params['imageCropApi'];

        $post = array(
            'imagePath' => $pathFile,
            'mode' => 1,
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //return $url . '&r=' . $r;
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POST, 1); //启用POST提交
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        $result = curl_exec($ch);
        curl_close($ch);

        $post = array(
            'imagePath' => $pathFile,
            'mode' => 1,
            'width' => 480,
            'height' => 480,
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //return $url . '&r=' . $r;
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POST, 1); //启用POST提交
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        $result = curl_exec($ch);
        curl_close($ch);

        $url = Yii::app()->params['imageCropApi'];
        $post = array(
            'imagePath' => $pathFile,
            'mode' => 1,
            'width' => 480,
            'height' => 480,
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //return $url . '&r=' . $r;
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POST, 1); //启用POST提交
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        $result = curl_exec($ch);
        curl_close($ch);

        return $imageData;
    }

    /**
     * 获取图片URL
     * @param type $imageId
     * @param type $class
     * @return string
     */
    public static function getImageUrl($imageId, $class) {
        if (!empty($imageId) && !empty($class)) {
            $pathClass = isset(Yii::app()->params['pathClass'][$class]) ? Yii::app()->params['pathClass'][$class] : null;
            if ($pathClass != null) {
                return Yii::app()->params['imageHost'] . $pathClass . $imageId . '.jpg';
            }
        }
        return '';
    }

    /**
     * @desc     权限判断
     * @return   true：可以执行后续操作;跳转
     * @auth     Kihra
     */
    public static function check_privilege() {
        return true;
        if (empty(Yii::app()->session['auth'])) {
            echo '没有权限1';
            exit;
        } else {
            $varb = Yii::app()->session['auth'];
        }

        if (isset($_REQUEST['r']) && !empty($_REQUEST['r'])) {
            $arr = explode('/', $_REQUEST['r']);
        }

        //获取参数个数 根据参数个数判断是何种方式；
        switch (count($arr)) {
            case 1:
                $con = strtolower($arr[0]);
                # code...
                break;
            case 3:
                $con = strtolower($arr[1]);
                $act = strtolower($arr[2]);
                # code...
                break;
            case 2:
                $con = strtolower($arr[0]);
                $act = strtolower($arr[1]);
                # code...
                break;
            default:
                # code...
                break;
        }
        $criteria = new CDbCriteria;
        if (isset($con) && !empty($con)) {
            $flag = 0;
            $criteria->addCondition("action_url = :action_url");
            $criteria->params[':action_url'] = $con;
            $data = AdminMenuModel::model()->find($criteria);
            //  Common::printr($con);
            if ($data) {
                $data_arr = explode(',', $data->auth);
                if (!empty($data_arr)) {
                    foreach ($data_arr as $key => $val) {
                        foreach ($varb as $k => $v) {
                            if ($val == $v) {
                                $flag = 1;
                                break;
                            }
                        }
                    }
                }
                $father = $data->father_id;
                $menu_id = $data->id;
            }
        }
        if ($flag == 0) {
            echo '没有权限2';
            exit;
        }

        if (isset($act) && !empty($act) && $act != 'index') {
            $flag = 0;
            $criteria = new CDbCriteria;
            $criteria->addCondition("url = :url");
            $criteria->addCondition("menu_id = :menu_id");
            $act_str = './index.php?r=' . $con . '/' . $act;
            $criteria->params[':url'] = $act_str;

            $criteria->params[':menu_id'] = $menu_id;
            $data = AdminMenuButtonModel::model()->find($criteria);
            if ($data) {
                $data_arr = explode(',', $data->auth);
                if (!empty($data_arr)) {
                    foreach ($data_arr as $key => $val) {
                        foreach ($varb as $k => $v) {
                            if ($val == $v) {
                                $flag = 1;
                                break;
                            }
                        }
                    }
                }
            }
            if ($flag == 0) {
                echo '没有权限3';
                exit;
            }
        }

        return;
    }

    /**
     * 获取图片URL
     * @param type $data
     * @return string
     */
    public static function imageUrl($imageIds) {
        if (is_array($imageIds)) {
            $CDbCriteria = new CDbCriteria();
            $CDbCriteria->addInCondition("`id`", $imageIds);
            $imageList = Image::model()->findAll($CDbCriteria);
            if (!empty($imageList)) {
                $imageIndex = array();
                foreach ($imageList as $v) {
                    $imageHost = Yii::app()->params['imageHost'];
                    $path = '';
                    if ($v->class == 'user') {
                        $path = Yii::app()->params['pathClass']['user'] . $v->user_id . '/';
                    } else {
                        $path = Yii::app()->params['pathClass'][$v->class];
                    }
                    $imageIndex[$v->id] = $imageHost . $path . $v->filename;
                }
                return $imageIndex;
            }
        }
        return null;
    }

    /**
     * 获取缓存数据
     * @param type $modelName
     * @param type $pkId
     * @return boolean
     */
    public static function getMemcache($modelName, $pkId) {
        if (!empty($modelName) && !empty($pkId)) {
            $key = $modelName . $pkId;
            $result = @Yii::app()->cacheMem->get($key);
            if (!empty($result)) {
                return $result;
            } else {
                $result = self::setMemcache($modelName, $pkId);
                if (!empty($result))
                    return $result;
            }
        }
        return null;
    }

    /**
     * 更新缓存数据
     * @param type $modelName
     * @param type $pkId
     * @param type $data
     * @return boolean
     */
    public static function setMemcache($modelName, $pkId) {
        if (!empty($modelName) && !empty($pkId)) {
            $key = $modelName . $pkId;
            $result = $modelName::model()->findByPkArray($pkId);
            if (!empty($result)) {
                Yii::app()->cacheMem->set($key, $result);
                return $result;
            }
        }
        return null;
    }

    /**
     * 获取运单信息
     * @param type $company
     * @param type $number
     * @param type $show
     * @param type $muti
     * @param string $order asc|desc
     * @return null
     */
    public static function getWaybill($company, $number, $show = 0, $muti = 1, $order = '') {
        if (!empty($company) && !empty($number)) {
            //$url = Yii::app()->params['kuaidi100']['url'].'&com='.$company.'&nu='.$number.'&show='.$show.'&muti='.$muti.'&order='.$order;
            $kuaidi100 = Yii::app()->params['kuaidi100'];
            if (!empty($kuaidi100['company'][$company])) {
                $url = Yii::app()->params['kuaidi100']['url'] . '&type=' . $company . '&postid=' . $number;
                $waybillData = file_get_contents($url);
                $waybillData = self::jsonDecode($waybillData);
                if (isset($waybillData['state'])) {
                    $stateName = !empty($kuaidi100['state'][$waybillData['state']]) ? $kuaidi100['state'][$waybillData['state']] : '';
                    $data = array();
                    if (is_array($waybillData['data'])) {
                        foreach ($waybillData['data'] as $v) {
                            $data[] = array(
                                'datetime' => $v['time'],
                                'content' => $v['context'],
                            );
                        }
                    }
                    $return = array(
                        'company' => $company,
                        'companyName' => $kuaidi100['company'][$company],
                        'number' => $number,
                        'state' => $waybillData['state'],
                        'stateName' => $stateName,
                        'data' => $data,
                    );
                    return $return;
                }
            }
        }
        return null;
    }

    /**
     * 检查用户是否登录
     */
    public static function checkLogin() {
        $userId = Yii::app()->user->getId();
        if (empty($userId)) {
            $loginUrl = Yii::app()->user->loginUrl[0];
            Yii::app()->request->redirect($loginUrl);
        }
    }

    /**
     * 处理图片
     * @param type $name
     * @param type $data
     * @return boolean
     */
    public static function t($name, $data) {
        $host = Yii::app()->params['api']['host'];
        $url = Yii::app()->params['api']['url'][$name];
        $data = self::dataEncode($data);
        $post = array('data' => $data);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $host . $url);
        //return $url . '&r=' . $r;
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POST, 1); //启用POST提交
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        $result = curl_exec($ch);
        curl_close($ch);
        $result = self::jsonDecode($result, true);
        if (is_array($result)) {
            return $result;
        }
        return false;
    }

    /**
     * @desc 	是否POST请求
     * @return
     * @example
     * @author  admin@songkai.org
     */
    public static function isPost() {
        return Yii::app()->request->isPostRequest;
    }

    /**
     * 分页查询
     * @param DBModel           $model      数据所在表的模型对象
     * @param EMongoCriteria    $criteria   查询过滤器
     * @param int               $size       每页记录数，默认10
     * @param string            $params     多个参数
     * @return 包含查询结果[rs]和分页信息[pages]的数组
     */
    public static function makePage($model, $criteria = array(), $size = 10, $params = array()) {
        $count = $model->count($criteria);

        //创建分页数据并加入到查询器中
        $pager = new CPagination($count);
        $pager->pageSize = $size;
        $pager->applyLimit($criteria);
        //多个参数传值params
        $pager->params = $params;
        //获取用户数据
        $rs = $model->findAll($criteria);
        return array('rs' => $rs, 'pages' => $pager, 'total' => intval(ceil($count / $size)), 'records' => $count, 'page' => $pager->currentPage);
    }

    /**
     * 数组加层
     * @param $res  数据结果结构
     * @return 加层 cell 把id拷贝到外一层
     */
    public static function rows_array_add($res) {
        $temp_array = array();
        foreach ($res as $key => $val) {
            $temp_array[$key]['id'] = $val->id;
            $temp_array[$key]['cell'] = CJSON::decode(CJSON::encode($val));
        }
        return $temp_array;
    }

    public static function rows_array_add_by_list($res) {
        $temp_array = array();
        foreach ($res as $key => $val) {
            $temp_array[$key]['id'] = $val['id'];
            $temp_array[$key]['cell'] = CJSON::decode(CJSON::encode($val));
        }
        return $temp_array;
    }

    /**
     * 机房管理列表数组加层
     */
    public static function room_rows_array_add($res) {
        $temp_array = array();
        foreach ($res as $key => $val) {
            $temp_array[$key]['id'] = $val->id;
            $criteria = new CDbCriteria;
            $criteria->select = 'name,state';
            $criteria->addCondition('id =:id');
            $criteria->params[':id'] = $val->pool_id;
            $pool_res = ResourcesPoolsModel::model()->find($criteria);
            $pool_name = $pool_res->name;
            $pool_state = $pool_res->state;
            $array_temp = CJSON::decode(CJSON::encode($val));
            $array_temp['pool_name'] = $pool_name;
            $array_temp['pool_state'] = Yii::app()->params['Pools']['state'][isset($pool_state) ? $pool_state : 1];
            $temp_array[$key]['cell'] = $array_temp;
        }
        return $temp_array;
    }

    /**
     * 用户信息管理列表数组加层
     * @param $res  数据结果结构
     * @return 加层 cell 把id拷贝到外一层
     */
    public static function userinfo_rows_array_add($res) {
        $temp_array = array();
        foreach ($res as $key => $val) {
            $temp_array[$key]['id'] = $val->user_id;
            $array_temp = CJSON::decode(CJSON::encode($val));
            $array_temp['key'] = $key + 1;
            $temp_array[$key]['cell'] = $array_temp;
        }
        return $temp_array;
    }

    /**
     * Servicetype服务主分类
     */
    public static function servicetype_rows_array_add($res) {
        $temp_array = array();
        foreach ($res as $key => $val) {
            $temp_array[$key]['id'] = $val->id;
            $array_temp = CJSON::decode(CJSON::encode($val));
            $array_temp['key'] = $key + 1;
            $temp_array[$key]['cell'] = $array_temp;
        }
        return $temp_array;
    }

    public function Update($id, $status) {
        $data = OrderInfoModel::model()->findByPk($id);
        if ($data) {
            $data->order_status = $status;
            return $data->update();
        } else {
            return False;
        }
    }

    /**
     * 查询
     * @param DBModel $model数据所在表的模型对象
     * @return 返回一个id为键，name为值的数组
     */
    public static function getInfo($model, $id = 'id', $name = 'name', $state = '') {
        $result = array();
        if (!empty($state)) {
            $row = $model->findAll(array('select' => array($id, $name), 'condition' => 'state=' . $state));
        } else {
            $row = $model->findAll(array('select' => array($id, $name),));
        }
        foreach ($row as $item) {
            $result[$item[$id]] = $item[$name];
        }//exit;
        return $result;
    }

    ############ 以下调试辅助函数 禁止用于生产代码中

    public static function printr($data) {
        echo '<pre>';
        print_r(CJSON::decode(CJSON::encode($data)));
        echo '</pre>';
        exit();
    }

    /**
     * 菜单信息数组拼接
     *
     */
    public function menuArr() {
        $secondaryMenu = AdminMenuModel::model()->findAll('father_id=0');
        $menu = AdminMenuModel::model()->findAll('father_id!=0');
        foreach ($secondaryMenu as $k => $v) {
            $arr[$k]['id'] = $v['id'];
            $arr[$k]['name'] = $v['menu_name'];
            $arr[$k]['menu'] = array();
            foreach ($menu as $kk => $vv) {
                $tmp = array();
                if ($v['id'] != $vv['father_id']) {
                    continue;
                } else {
                    $tmp['id'] = $vv['id'];
                    $tmp['name'] = $vv['menu_name'];
                    $tmp['father_id'] = $vv['father_id'];
                    array_push($arr[$k]['menu'], $tmp);
                }
            }
        }

        return $arr;
    }

    /**
     * 菜单Id与权限的集合
     */
    public function getMenuAuthArr() {
        $menu = AdminMenuModel::model()->findAll('state = 1');
        foreach ($menu as $item) {
            $arr[$item['id']] = $item['auth'];
        }

        return $arr;
    }

    /**
     * 获取未使用了的权限等级
     */
    public function getUnUsedAuth() {
        $auth = AdminAuthModel::model()->findAll();
        $number = range(1, 9);
        foreach ($auth as $item) {
            $arr[] = $item['auth'];
        }
        return array_diff($number, $arr);
    }

    /**
     *  生成密码
     *  这里提供两种字符获取方式
     *  第一种是使用 substr 截取$chars中的任意一位字符；
     *  第二种是取字符数组 $chars 的任意元素
     */
    public static function generate_password($length = 12) {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'; // 密码字符集，可任意添加你需要的字符

        $password = '';
        // 这里提供两种字符获取方式
        // 第一种是使用 substr 截取$chars中的任意一位字符；
        // 第二种是取字符数组 $chars 的任意元素
        // $password .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
        for ($i = 0; $i < $length; $i++) {
            $password .= $chars[mt_rand(0, strlen($chars) - 1)];
        }
        return $password;
    }

    public static function generate_password_ex($length = 12) {
        $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; // 密码字符集，可任意添加你需要的字符
        $numbers = "0123456789";
        $special = "~!@#$%^&*()_+-=[]{}";

        $password = '';
        // 这里提供两种字符获取方式
        // 第一种是使用 substr 截取$chars中的任意一位字符；
        // 第二种是取字符数组 $chars 的任意元素
        // $password .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
        $chars = array("l" => $letters, "n" => $numbers, "s" => $special);
        for ($i = 0; $i < $length; $i++) {
            $rand = array_rand($chars);
            $char = $chars[$rand];
            $password .= $char[mt_rand(0, strlen($char) - 1)];
            if ($rand == "s") {
                $chars = array_diff($chars, array($rand => $char));
            }
        }
        return $password;
    }

    /**
     * 查找权限能问的菜单
     *
     */
    public function getAuthMenu() {
        $authMenu = AdminMenuModel::model()->findAll('state = 1');
        $buttonMenu = AdminMenuButtonModel::model()->findAll();
        $button_arr = array();
        foreach ($buttonMenu as $val) {
            $button_arr[$val->menu_id][] = array('button_name' => $val->button_name, 'button_id' => $val->button_id, 'auth' => $val->auth, 'menu_id' => $val->menu_id);
        }
        $menu_res = array();
        $sedmenu_res = array();
        $button_res = array();
        foreach ($authMenu as $key => $menu) {
            if ($menu->father_id != '0') {
                $sedmenu_res[$menu->father_id][] = CJSON::decode(CJSON::encode($menu));
            }
        }
        foreach ($buttonMenu as $key => $menu) {
            $button_res[$menu->menu_id][] = CJSON::decode(CJSON::encode($menu));
        }
        foreach ($authMenu as $key => $menu) {
            if ($menu->father_id == '0') {
                $menu_res[$menu->id] = CJSON::decode(CJSON::encode($menu));
            }
        }
        //Common::printr(array('button_res'=>$button_res,'sedmenu_res'=>$sedmenu_res,'menu_res'=>$menu_res));
        return array('button_res' => $button_res, 'sedmenu_res' => $sedmenu_res, 'menu_res' => $menu_res);
    }

    /*
     * 删除特定角色的所有权限
     */

    public static function removeRoleAuth($auth) {
        $authMenu = AdminMenuModel::model()->findAll();
        $authMenuButton = AdminMenuButtonModel::model()->findAll();
        foreach ($authMenu as $item) {
            $val = implode(',', array_diff(explode(',', $item['auth']), array($auth)));
            AdminMenuModel::model()->updateByPk($item['id'], array('auth' => $val));
        }
        foreach ($authMenuButton as $item) {
            $val = implode(',', array_diff(explode(',', $item['auth']), array($auth)));
            AdminMenuButtonModel::model()->updateAll(array('auth' => $val), 'button_id=:button_id', array(':button_id' => $item['button_id']));
        }
    }

    /**
     * 判断传入字符串密码
     * 以字母开头，长度在6-18之间，只能包含字符、数字和下划线。
     *
     * @param unknown_type $str
     * @return unknown
     */
    public static function ic_checkPassword($str) {
        $reg = "/^[a-zA-Z]\w{5,17}$/";
        if (preg_match($reg, $str)) {
            return true;
        } else {
            //return "密码必须是以字母开头，长度在6-18之间，只能包含字符、数字和下划线!";
            return false;
        }
    }

    /**
     * 判断传入字符串是否是合法url组成^[a-zA-Z]\w{5,17}$
     *
     * @param unknown_type $str
     * @return unknown
     */
    public static function ic_checkUrl($str) {
        $reg = "/^http://([\w-]+\.)+[\w-]+(/[\w-./?%&=]*)?$ ；^[a-zA-z]+://(w+(-w+)*)(.(w+(-w+)*))*(?S*)?$/";
        if (preg_match($reg, $str)) {
            return true;
        } else {
            //return "url格式错误!";
            return false;
        }
    }

    /**
     * 判断传入字符串是否是合法Email组成
     *
     * @param unknown_type $str
     * @return unknown
     */
    public static function ic_checkEmail($str) {
        $reg = "/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/";
        if (preg_match($reg, $str)) {
            return true;
        } else {
            return false;
        }
    }

    /*
     * 关联表id=>name
     */

    public static function convertName($key, $arr) {
        if (array_key_exists($key, $arr)) {
            return $arr[$key];
        } else {
            return '无';
        }
    }

    /*
     * 拼接数组
     *
     * @param array;
     * return array;
     */

    public static function makeMainIdNameArr($model) {
        $res = $model->findAll();
        $tmpf = array();
        foreach ($res as $val) {
            if ($val->father_id == 0) {
                $tmpf[$val->id] = $val->name;
            } else {
                continue;
            }
        }
        return $tmpf;
    }

    public static function makeIdNameArr($model) {
        $tmpf = self::makeMainIdNameArr($model);
        $res = $model->findAll();

        $tmps = array();
        foreach ($tmpf as $key => $item) {
            $sub = array();
            foreach ($res as $val) {
                if ($key == $val->father_id) {
                    $sub[$val->id] = $val->name;
                } else {
                    continue;
                }
            }$tmps[$key] = $sub;
        }
        return $tmps;
    }

    /**
     * 添加log日志
     * @param string 匹配名称
     * @param int    匹配模式
     * @return boolean
     */
    public static function vm_log($user_id, $workapps_vm_id, $user_name, $content) {
        $log = new VmLogModel();
        $log->user_id = $user_id;
        $log->workapps_vm_id = $workapps_vm_id;
        $log->username = $user_name;
        $log->content = $content;
        $log->create_time = time();
        /// Common::printr($log);
        $log->save();
    }

    /**
     * @desc 发送邮件
     */
    public static function mail($message = "hello", $AddAddress = "changbiyu@yovole.com") {
        //发送mail
        $mailer = Yii::createComponent('application.components.mailer.EMailer');
        $mailer->Host = 'smtp.yovole.com';
        $mailer->IsSMTP();
        $mailer->SMTPAuth = true;
        $mailer->From = 'sunapp_service@yovole.com';
        $mailer->AddReplyTo('sunapp_service@yovole.com');
        $mailer->AddAddress($AddAddress);
        $mailer->FromName = '密码重置邮件';  //邮件标题
        $mailer->Username = 'sunapp_service@yovole.com';    //这里输入发件地址的用户名
        $mailer->Password = 'Yovole11*';    //这里输入发件地址的密码
        $mailer->CharSet = 'UTF-8';
        $mailer->SMTPDebug = False;   //调试的时候打开发现错误
        $mailer->Body = "您的新密码为:" . $message . "。请及时登录http://ecloud.yovole.com修改密码";
        $mailer->Send();
        return;
    }

    /**
     * @desc 查询结果集重组
     */
    public static function regroup_array($result) {
        $rs_arr = array();
        foreach ($result as $key => $value) {
            $rs_arr[$key]['company_name'] = $value->company_name;
            $rs_arr[$key]['company_email'] = $value->company_email;
        }
        return $rs_arr;
    }

    /**
     * @desc 
     */
    public static function ids($model, $field) {
        $array_id = array();
        $model_res = $model->findAll($field . '=' . Yii::app()->user->getId());
        if (!empty($model_res)) {
            foreach ($model_res as $val) {
                $array_id[] = $val->id;
            }
        }
        return $array_id;
    }

    /**
     * @desc 
     */
    public static function is_id($id) {
        if (is_numeric($id)) { //判断是否是数字
            $id = intval($id);
            if (intval($id) > 0) {
                return TRUE;
            }
        }
        return FALSE;
    }

    //url base64编码
    static function urlsafe_b64encode($string) {
        $data = base64_encode($string);
        $data = str_replace(array('+', '/', '='), array('-', '_', ''), $data);
        return $data;
    }

    //url base64解码
    static function urlsafe_b64decode($string) {
        $data = str_replace(array('-', '_'), array('+', '/'), $string);
        $mod4 = strlen($data) % 4;
        if ($mod4) {
            $data .= substr('====', $mod4);
        }
        return base64_decode($data);
    }

    /**
     * 导入execl
     * $top_rows = array('A1'=>'用户名','B1'=>'密码'......)
     * $select_data (select 字段)
     * $res
     */
    static function import_execl($top_rows = array(), $select_data, $res, $execl_name = '表格名') {
        /* 静用Yii自身的自动加载方法，使PHPExcel自带的autoload生效 */
        Yii::$enableIncludePath = false;
        /* 引入PHPExcel.php文件 */
        Yii::import('application.extensions.PHPExcel.PHPExcel', 1);

        ob_end_clean();
        ob_start();

        $objPHPExcel = new PHPExcel();

        $objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
                ->setLastModifiedBy("Maarten Balliauw")
                ->setTitle("Office 2007 XLSX Test Document")
                ->setSubject("Office 2007 XLSX Test Document")
                ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
                ->setKeywords("office 2007 openxml php")
                ->setCategory("Test result file");

        $objPHPExcel->setActiveSheetIndex(0);
        $objActSheet = $objPHPExcel->getActiveSheet();
        foreach ($top_rows as $key => $val) {
            $objActSheet->getColumnDimension('A')->setAutoSize(true);
            $objActSheet->setCellValue($key, $val);
        }

        if (!empty($res)) {
            $i = 2;
            foreach ($res as $val) {
                $objPHPExcel->setActiveSheetIndex(0);
                $objActSheet = $objPHPExcel->getActiveSheet();
                //Common::printr($select_data);
                foreach ($select_data as $key => $val2) {
                    $objStyleA5 = $objActSheet->getStyle("$key$i");
                    $objStyleA5 = $objStyleA5->getAlignment();
                    $objActSheet->setCellValue("$key$i", $val[$val2]);

                    //设置宽度  
                    $objActSheet->getColumnDimension("$key")->setWidth(20);

                    //设置对齐方式  
                    $objStyleA5->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                    $objStyleA5->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                }
                $i++;
            }
        }
        $objPHPExcel->getActiveSheet()->setTitle($execl_name);
        // $objPHPExcel->setActiveSheetIndex(0);
        //$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');  
        //$objWriter->save(str_replace('.php', '.xlsx', __FILE__));  
        $objWriter = new PHPExcel_Writer_Excel5($objPHPExcel);



        header('Content-Type : application/vnd.ms-excel');
        header('Content-Disposition:attachment;filename="' . $execl_name . '-' . date("Y-m-d", time()) . '.xls"');
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output');
    }

    /**
     * 数据加密
     * @param type $inString
     * @param type $inKey
     * @return type
     */
    static function _encode($inString, $inKey = '3sx4dy9p', $json = true) {
        //默认构造时，使用默认的加密key:yovo2013
        $escobj = new YFDESPlus($inKey);
        //json
        if ($json) {
            $inString = CJSON::encode($inString);
        }
        $encode = $escobj->encrypt($inString);
        return $encode;
    }

    /**
     * 数据解密
     * @param type $inString
     * @param type $inKey
     * @return type
     */
    static function _dncode($inString, $inKey = '3sx4dy9p') {
        //默认构造时，使用默认的加密key:yovo2013
        $escobj = new YFDESPlus($inKey);
        //解密
        $dncode = $escobj->decrypt($inString);
        return $dncode;
    }

    static function openServiceInterface($param, $name) {
        if (stristr($name, "邮箱")) {
            $mail = new ExternalEmailInterface();
            $mail->UserCreateMailbox($param);
        }//后续开通服务继续添加
    }

    static function getLog($service_name, $operator) {
        $cri = new CDbCriteria();
        $cri->limit = 5;
        $cri->addCondition("service_name=:name");
        $cri->addCondition("operator=:user");
        $cri->params = array(":name" => $service_name, ":user" => $operator);
        $cri->order = "operate_time desc";

        return LogInfoModel::model()->findAll($cri);
    }

    /**
     * 国际化方法 
     * @autor 常碧予 2015-03-12
     */
    static function language() {
        if (isset($_REQUEST['lang']) && $_REQUEST['lang'] != "") {
            //通过lang参数识别语言 
            Yii::app()->language = $_REQUEST['lang'];
            setcookie('lang', $_REQUEST['lang']);
        } else if (isset($_COOKIE['lang']) && $_COOKIE['lang'] != "") {
            //通过$_COOKIE['lang']识别语言 
            Yii::app()->language = $_COOKIE['lang'];
        } else {
            //通过系统或浏览器识别语言 
            $lang = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
            //CMessageSource的$forceTranslation属性改为true
            Yii::app()->messages->forceTranslation = true;

            //Yii::app()->language = 'zh_cn';
            Yii::app()->language = strtolower(str_replace('-', '_', $lang[0]));
        }
    }

    
    function diffDate($date1, $date2) {
        $datestart = date('Y-m-d', strtotime($date1));
        if (strtotime($datestart) > strtotime($date2)) {
            $tmp = $date2;
            $date2 = $datestart;
            $datestart = $tmp;
        }
        list($Y1, $m1, $d1) = explode('-', $datestart);
        list($Y2, $m2, $d2) = explode('-', $date2);
        $Y = $Y2 - $Y1;
        $m = $m2 - $m1;
        $d = $d2 - $d1;
        if ($d < 0) {
            $d+=(int) date('t', strtotime("-1 month $date2"));
            $m--;
        }
        if ($m < 0) {
            $m+=12;
            $y--;
        }
        return $m ;
//        if ($Y == 0) {
//            return $m . '个月' . $d . '天';
//        } elseif ($Y == 0 && $m == 0) {
//            return $d . '天';
//        } else {
//            return $Y . '年' . $m . '个月' . $d . '天';
//        }
    }

}
