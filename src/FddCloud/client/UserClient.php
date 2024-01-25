<?php

namespace FddCloud\client;

use FddCloud\bean\req\user\DisableUserReq;
use FddCloud\bean\req\user\EnableUserReq;
use FddCloud\bean\req\user\GetUserAuthUrlReq;
use FddCloud\bean\req\user\GetUserChangeUrlReq;
use FddCloud\bean\req\user\GetUserIdentityInfoReq;
use FddCloud\bean\req\user\GetUserReq;
use FddCloud\bean\req\user\UnbindUserReq;
use FddCloud\constants\OpenApiUrlConstants;

class UserClient
{

    private $client;

    public function __construct(IClient $client)
    {
        $this->client = $client;
    }

    # 获取个人用户授权链接
    function getUserAuthUrl($accessToken, GetUserAuthUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::USER_GET_AUTH_URL);
    }

    # 禁用个人用户
    function disable($accessToken, DisableUserReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::USER_DISABLE);
    }

    # 恢复个人用户
    function enable($accessToken, EnableUserReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::USER_ENABLE);
    }

    # 解绑个人用户账号
    function unbind($accessToken, UnbindUserReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::USER_UNBIND);
    }

    # 查询个人用户基本信息
    function getDetail($accessToken, GetUserReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::USER_GET_DETAIL);
    }

    # 获取个人用户身份信息
    function getIdentityInfo($accessToken, GetUserIdentityInfoReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::USER_GET_IDENTITY_INFO);
    }

    function getAccountChangeUrl($accessToken, GetUserChangeUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::USER_ACCOUNT_NAME_GET_CHANGE_URL);
    }

}
