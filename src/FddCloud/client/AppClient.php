<?php

namespace FddCloud\client;

use FddCloud\bean\req\app\GetAppDevelopInfoReq;
use FddCloud\bean\req\app\GetAppOpenIdListReq;
use FddCloud\bean\req\app\ModifyAppReq;
use FddCloud\constants\OpenApiUrlConstants;
use FddCloud\bean\req\app\GetAppInfoReq;

class AppClient
{
    private $client;

    public function __construct(IClient $client)
    {
        $this->client = $client;
    }

    # 查询应用信息
    function getAppInfo($accessToken, GetAppInfoReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::APP_GET_INFO);
    }

    # 修改应用信息
    function modifyApp($accessToken, ModifyAppReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::APP_MODIFY);
    }

    # 查询授权用户列表
    function getOpenIdList($accessToken, GetAppOpenIdListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::APP_GET_OPEN_ID_LIST);
    }

    # 查询委托代开发应用列表
    function getAppDevelopList($accessToken)
    {
        return $this->client->request($accessToken, "{}", OpenApiUrlConstants::APP_DEVELOP_GET_LIST);
    }

    # 查询场景码列表
    function getBusinessIdList($accessToken)
    {
        return $this->client->request($accessToken, "{}", OpenApiUrlConstants::APP_GET_BUSINESS_ID_LIST);
    }

}
