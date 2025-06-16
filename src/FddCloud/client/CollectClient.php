<?php
namespace FddCloud\client;
use FddCloud\bean\req\collect\DeleteSmartformReq;
use FddCloud\bean\req\collect\DeleteSmartformSerialReq;
use FddCloud\bean\req\collect\GetSmartformCollectUrlReq;
use FddCloud\bean\req\collect\GetSmartformDetailReq;
use FddCloud\bean\req\collect\GetSmartformListReq;
use FddCloud\bean\req\collect\GetSmartformManageUrlReq;
use FddCloud\bean\req\collect\GetSmartformSerialInfoReq;
use FddCloud\constants\OpenApiUrlConstants;

class CollectClient
{
    private $client;

    public function __construct(IClient $client)
    {
        $this->client = $client;
    }

    # 查询收集表列表
    function getSmartformList($accessToken, GetSmartformListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::SMARTFORM_GET_LIST);
    }

    function getSmartformDetail($accessToken, GetSmartformDetailReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::SMARTFORM_GET_DETAIL);
    }

    function deleteSmartform($accessToken, DeleteSmartformReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::SMARTFORM_DELETE);
    }

    function getSmartformSerialInfo($accessToken, GetSmartformSerialInfoReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SMARTFORM_SERIAL_GET_INFO);
    }

    function deleteSmartformSerial($accessToken, DeleteSmartformSerialReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::SMARTFORM_SERIAL_DELETE);
    }

    function getSmartformManageUrl($accessToken, GetSmartformManageUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::SMARTFORM_MANAGE_GET_URL);
    }

    function getSmartformCollectUrl($accessToken, GetSmartformCollectUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::SMARTFORM_COLLECT_GET_URL);
    }

}
