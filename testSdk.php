<?php
/**
 * 测试文件
 */
//引入composer包
require_once __DIR__ . '/autoload.php';

use FddCloud\bean\req\user\FreeSignInfo;
use FddCloud\bean\req\user\GetUserAuthUrlReq;
use FddCloud\bean\req\user\UserIdentInfo;
use FddCloud\client\Client;
use FddCloud\client\ServiceClient;
use FddCloud\client\UserClient;
use FddCloud\constants\OpenApiConfig;

var_dump("--------------------------初始化 start----------------------------");
$serviceUrl= 'https://uat-api.fadada.com/api/v5/';
$appId = '00000199';
$appSecret = 'JTYPDTNO2J9N0KLY6ZWBQ7SJUKGBHYSK';
OpenApiConfig::init($serviceUrl,$appId,$appSecret);
OpenApiConfig::setDebug(false);//是否开启工作台日志打印

$client = new Client(OpenApiConfig::getAppId(), OpenApiConfig::getAppSecret(), OpenApiConfig::getServiceUrl());
//-----------------基础信息初始化 end--------------------------
var_dump("--------------------------初始化 end----------------------------");

/*****获取token******/
$serviceClient = new ServiceClient($client);
$response = $serviceClient->getAccessToken();
print_r($response . "\n");
$res = json_decode($response);

# 获取个人授权链接
$userClient = new UserClient($client);
getUserAuthUrl($res->data->accessToken,$userClient);

function getUserAuthUrl($accessToken,UserClient $client)
{
    $getUserAuthUrlReq = new GetUserAuthUrlReq();
    # 个人用户在应用中的唯一标识，长度最大64个字符
    $getUserAuthUrlReq->setClientUserId("4aehyetqwq2");
    # 个人用户的法大大帐号，仅限手机号或邮箱，长度最大30个字符。如该手机号或邮箱未注册法大大，则用户会以此作为注册账号
    $getUserAuthUrlReq->setAccountName("18********5");
    # 如clientUserId已经绑定了法大大帐号，或绑定的实名信息与本次认证实名信息不一致，用户打开链接后是否默认解绑之前的帐号并以本次登录的帐号更新实名信息，默认为false false：不解绑 true：解绑
    $getUserAuthUrlReq->setUnbindAccount(false);
    # 个人认证信息
    $getUserAuthUrlReq->setUserIdentInfo(userIdentInfo(
        "周*",
        "id_card",
        "34***************X",
        "18********5",
        null,
        ["face", "bank", "mobile", "offline"])
    );
    # 页面中不可编辑的个人信息，不传默认都可编辑。
    # accountName：个人用户的法大大帐号;
    # userName：姓名
    # userIdentType：证件类型
    # userIdentNo：证件号码
    # mobile：手机号
    # bankAccountNo：银行卡号
    $nonEditableInfo = ["accountName"];
    $getUserAuthUrlReq->setNonEditableInfo($nonEditableInfo);
    # 个人用户授权范围，多个之间用英文逗号隔开：
    #【个人帐号】ident_info：授权允许获取个人身份信息
    #【签名】seal_info：授权允许获取个人用户的签名资源
    #【签署任务】
    # signtask_init： 授权允许代表个人发起签署
    # signtask_info： 授权允许获取个人用户的签署任务
    # signtask_file： 授权允许获取个人用户的签署文件
    # file_storage： 授权签署文件存储到应用的企业服务器，仅针对应用开启本地存储时生效
    # 注意： 在授权页面上会显示对应授权项，用户可选择不接受设置的授权范围，实际的授权范围将通过redirectUrl的参数告知，同时个人授权事件回调通知应用系统。也可通过查询个人认证授权状态查询
    $authScope = ["ident_info", "seal_info", "signtask_init", "signtask_info", "signtask_file","file_storage"];
    $getUserAuthUrlReq->setAuthScopes($authScope);
    $freeSignInfo = new FreeSignInfo();
    # 需要绑定默认签名的免验证签场景码。如何获取场景码请查看帮助文档-免验证签使用说明
    # 注：如选择人工审核认证方式，认证完成后无法开通免验证签
    $freeSignInfo->setBusinessId("");
    # 用户授权同时设置默认签名为免验证签的相关信息
//    $getUserAuthUrlReq->setFreeSignInfo($freeSignInfo);
    # 重定向地址,即用户在返回的页面上完成操作后重定向跳转到该地址，并且附带上参数。该地址是应用系统的地址，以实现用户交互在应用系统和法大大平台之间的连贯性。长度最大500个字符
    $getUserAuthUrlReq->setRedirectUrl(urlencode("https://www.163.com/"));
    # 小程序的重定向地址（微信和支付宝），长度最大1000个字符。
    # 使用场景：小程序中集成该页面，操作完成后跳转地址为小程序原生页面路径，如"/pages/index/index"，系统判断在小程序环境会跳转至该地址。
    # 注：需要进行编码，若非原生页面路径请使用redirectUrl字段
    $getUserAuthUrlReq->setRedirectMiniAppUrl("");
    $response = $client->getUserAuthUrl($accessToken, $getUserAuthUrlReq);
    print_r($response . "\n");
}

function userIdentInfo($userName,$userIdentType,$userIdentNo,$mobile,$bankAccountNo,$identMethod): UserIdentInfo
{
    $userIdentInfo = new UserIdentInfo();
    $userIdentInfo->setUserName($userName);
    $userIdentInfo->setUserIdentType($userIdentType);
    $userIdentInfo->setUserIdentNo($userIdentNo);
    $userIdentInfo->setMobile($mobile);
    $userIdentInfo->setBankAccountNo($bankAccountNo);
    $userIdentInfo->setIdentMethod($identMethod);
    return $userIdentInfo;
}