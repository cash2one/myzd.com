<?php
     
   // var_dump(Yii::app()->language);

 $value="my cookie test";
$cookie = new CHttpCookie('cookie_name123', $value);
$cookie->expire = time()+60*60*24*180; 
Yii::app()->request->cookies[] = $cookie;
var_dump( Yii::app()->request->cookies['cookie_name123']);
Yii::app()->request->cookies->clear();
?>
