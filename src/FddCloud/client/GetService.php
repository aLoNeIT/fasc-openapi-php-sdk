<?php

namespace FddCloud\client;

use FddCloud\constants\OpenApiConfigConstants;


class GetService
{
    public function __construct()
    {

    }

    function getAccessToken()
    {
        /*****获取token******/
        $serviceClient = new ServiceClient(new Client(OpenApiConfigConstants::APP_ID, OpenApiConfigConstants::APP_SECRET, OpenApiConfigConstants::SERVICE_URL));

        $response = $serviceClient->getAccessToken();
        print_r($response . "\n");
        $res = json_decode($response);
        return $res->data->accessToken;
    }

    function getAppAccessTicket()
    {
        /*****获取token******/
        $serviceClient = new ServiceClient(new Client(OpenApiConfigConstants::APP_ID, OpenApiConfigConstants::APP_SECRET, OpenApiConfigConstants::SERVICE_URL));

        $response = $serviceClient->getAppAccessTicket();
        print_r($response . "\n");
        $res = json_decode($response);
        return $res->data->accessToken;
    }

    function getUserAccessTicket()
    {
        /*****获取token******/
        $serviceClient = new ServiceClient(new Client(OpenApiConfigConstants::APP_ID, OpenApiConfigConstants::APP_SECRET, OpenApiConfigConstants::SERVICE_URL));

        $response = $serviceClient->getUserAccessTicket();
        print_r($response . "\n");
        $res = json_decode($response);
        return $res->data->accessToken;
    }
}
