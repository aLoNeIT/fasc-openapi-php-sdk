<?php
/**
 * 测试文件
 */

use FddCloud\constants\OpenApiConfig;
use FddCloud\utils\crypt\FddCryptUtil;

require_once __DIR__ . '/autoload.php';

/**读取配置文件**/
$apiConfigFile = './test/api_config.php';
$openApiConfig = new OpenApiConfig($apiConfigFile);
$app_secret = $openApiConfig->getConfig()['app_secret'];
header('Content-Type: application/x-www-form-urlencoded');

$headers = getallheaders();

//获取请求头参数
$appId = $headers["X-FASC-App-Id"];
$signType = $headers["X-FASC-Sign-Type"];
$sign_in = $headers["X-FASC-Sign"];
$timestamp = $headers["X-FASC-Timestamp"];
//事件名称，开发者可以根据不同事件名称去解析bizContent的值，实现不同的逻辑
$event = $headers["X-FASC-Event"];
$nonce = $headers["X-FASC-Nonce"];

$data = file_get_contents('php://input');

parse_str($data, $post_data);

$bizContent = $post_data['bizContent'];

//组装需要去计算签名的参数
$values = array();
$values['X-FASC-App-Id'] = $appId;
$values['X-FASC-Timestamp'] = $timestamp;
$values['X-FASC-Sign-Type'] = $signType;
$values['X-FASC-Nonce'] = $nonce;
$values['X-FASC-Event'] = $event;
$values['bizContent'] = $bizContent;

//计算签名值
$fddCryptUtil= new FddCryptUtil();

$sign_out = $fddCryptUtil->signature($timestamp,$app_secret,$values);
print_r($sign_out."\n");
if($sign_in == $sign_out){
    echo 'success';
}else{
    echo 'is fail success';
}




?>


