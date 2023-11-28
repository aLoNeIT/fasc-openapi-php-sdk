<?php

namespace FddCloud\client;

use FddCloud\bean\req\ocr\edit\GetCompareResultDataReq;
use FddCloud\bean\req\ocr\edit\GetCompareResultUrlReq;
use FddCloud\bean\req\ocr\edit\GetCompareUrlReq;
use FddCloud\bean\req\ocr\edit\GetExamineDataReq;
use FddCloud\bean\req\ocr\edit\GetExamineResultUrlReq;
use FddCloud\bean\req\ocr\edit\GetExamineUrlReq;
use FddCloud\constants\OpenApiUrlConstants;


class OCRClient
{

    private $client;

    public function __construct(IClient $client)
    {
        $this->client = $client;
    }

    public function getCompareUrl($accessToken, GetCompareUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::OCR_EDIT_GET_COMPARE_URL);
    }

    public function getCompareResultUrl($accessToken, GetCompareResultUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::OCR_EDIT_COMPARE_RESULT_URL);
    }

    public function getCompareResultData($accessToken, GetCompareResultDataReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::OCR_EDIT_COMPARE_RESULT_DATA);
    }

    public function getExamineUrl($accessToken, GetExamineUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::OCR_EDIT_GET_EXAMINE_URL);
    }

    public function getExamineResultUrl($accessToken, GetExamineResultUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::OCR_EDIT_EXAMINE_RESULT_URL);
    }

    public function getExamineResultData($accessToken, GetExamineDataReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::OCR_EDIT_EXAMINE_RESULT_DATA);
    }

}