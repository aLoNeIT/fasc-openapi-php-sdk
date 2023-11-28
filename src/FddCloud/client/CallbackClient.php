<?php


namespace FddCloud\client;

use FddCloud\bean\req\callback\GetCallBackListReq;
use FddCloud\constants\OpenApiUrlConstants;


class CallbackClient
{
    private $client;

    public function __construct(IClient $client)
    {
        $this->client = $client;
    }

    # 查询回调列表
    function getCallbackList($accessToken, GetCallBackListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::GET_CALL_BACK_LIST);
    }

}
