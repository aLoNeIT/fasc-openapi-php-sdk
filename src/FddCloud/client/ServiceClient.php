<?php

namespace FddCloud\client;

use FddCloud\constants\OpenApiUrlConstants;

class ServiceClient
{

    private $client;

    public function __construct(IClient $client)
    {
        $this->client = $client;
    }

    # 获取服务访问凭证
    function getAccessToken()
    {
        return $this->client->request(null, null, OpenApiUrlConstants::SERVICE_GET_ACCESS_TOKEN);
    }

    # 获取应用级资源访问凭证
    function getAppAccessTicket()
    {
        return $this->client->request(null, null, OpenApiUrlConstants::SERVICE_GET_APP_ACCESS_TICKET);
    }

    # 获取用户级资源访问凭证
    function getUserAccessTicket()
    {
        return $this->client->request(null, null, OpenApiUrlConstants::SERVICE_GET_USER_ACCESS_TICKET);
    }
}