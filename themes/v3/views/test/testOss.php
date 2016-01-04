<?php
require_once( Yii::getPathOfAlias('webroot') . '/protected/extensions/oss-php-sdk/sdk.class.php');


$oss_sdk_service = new ALIOSS();

var_dump($oss_sdk_service);

get_object($oss_sdk_service);

get_sign_url($oss_sdk_service);


function get_object($obj){
	$bucket = 'myhz-mr';
	$object = '111111.jpg'; 
	
	$options = array(
		ALIOSS::OSS_FILE_DOWNLOAD => "d:\\cccccccccc.sh",
		//ALIOSS::OSS_CONTENT_TYPE => 'txt/html',
	);	
	
	$response = $obj->get_object($bucket,$object,$options);
        var_dump($response);
	//_format($response);
}


//生成签名url,主要用户私有权限下的访问控制
function get_sign_url($obj){
	$bucket = 'myhz-mr';
	$object = '111111.jpg';
	$timeout = 3600;

	$response = $obj->get_sign_url($bucket,$object,$timeout);
	var_dump($response);
}

//格式化返回结果
function _format($response) {
	echo '|-----------------------Start---------------------------------------------------------------------------------------------------'."\n";
	echo '|-Status:' . $response->status . "\n";
	echo '|-Body:' ."\n"; 
	echo $response->body . "\n";
	echo "|-Header:\n";
	print_r ( $response->header );
	echo '-----------------------End-----------------------------------------------------------------------------------------------------'."\n\n";
}
