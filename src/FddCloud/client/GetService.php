<?php

namespace FddCloud\client;

use FddCloud\constants\OpenApiConfig;


class GetService
{
    public function __construct()
    {

    }

    function getAccessToken($appId,$appSecret,$serviceUrl)
    {
        /*****获取token******/
        $serviceClient = new ServiceClient(new Client($appId, $appSecret, $serviceUrl));

        $response = $serviceClient->getAccessToken();
        print_r($response . "\n");
        $res = json_decode($response);
        return $res->data->accessToken;
    }
}
