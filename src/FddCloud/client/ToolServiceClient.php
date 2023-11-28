<?php

namespace FddCloud\client;

use FddCloud\bean\req\tool\identity\BankFourElementVerifyReq;
use FddCloud\bean\req\tool\identity\BankThreeElementVerifyReq;
use FddCloud\bean\req\tool\identity\BusinessInfoQueryReq;
use FddCloud\bean\req\tool\identity\BusinessThreeElementVerifyReq;
use FddCloud\bean\req\tool\identity\GetIdCardImageDownloadUrlReq;
use FddCloud\bean\req\tool\identity\GetUserFourElementVerifyUrlReq;
use FddCloud\bean\req\tool\identity\GetUserThreeElementVerifyUrlReq;
use FddCloud\bean\req\tool\identity\IdCardThreeElementVerifyReq;
use FddCloud\bean\req\tool\identity\IdentityTwoElementVerifyReq;
use FddCloud\bean\req\tool\identity\TelecomThreeElementVerifyReq;
use FddCloud\bean\req\tool\ocr\BankCardOcrReq;
use FddCloud\bean\req\tool\ocr\BizLicenseOcrReq;
use FddCloud\bean\req\tool\ocr\DrivingLicenseOcrReq;
use FddCloud\bean\req\tool\ocr\IdCardOcrReq;
use FddCloud\bean\req\tool\ocr\MainlandPermitOcrReq;
use FddCloud\bean\req\tool\ocr\VehicleLicenseOcrReq;
use FddCloud\bean\req\tool\verify\GetFaceRecognitionStatusReq;
use FddCloud\bean\req\tool\verify\GetFaceRecognitionUrlReq;
use FddCloud\constants\OpenApiUrlConstants;

class ToolServiceClient
{
    private $client;

    public function __construct(IClient $client)
    {
        $this->client = $client;
    }

    /**
     *  一、信息对比校验
     */

    # 个人二要素校验
    public function identityTwoElementVerify($accessToken, IdentityTwoElementVerifyReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::USER_IDENTITY_TWO_ELEMENT_VERIFY);
    }

    # 人脸图片比对校验
    public function idCardThreeElementVerify($accessToken, IdCardThreeElementVerifyReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::USER_IDENTITY_IDCARD_THREE_ELEMENT_VERIFY);
    }

    # 个人银行卡三要素校验
    public function bankThreeElementVerify($accessToken, BankThreeElementVerifyReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::USER_IDENTITY_BANK_THREE_ELEMENT_VERIFY);
    }

    # 个人银行卡四要素校验
    public function bankFourElementVerify($accessToken, BankFourElementVerifyReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::USER_BANK_FOUR_ELEMENT_VERIFY);
    }

    # 个人运营商三要素校验
    public function threeElementVerify($accessToken, TelecomThreeElementVerifyReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::USER_TELECOM_THREE_ELEMENT_VERIFY);
    }

    # 企业组织三要素校验
    public function businessThreeElementVerify($accessToken, BusinessThreeElementVerifyReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::CORP_IDENTITY_BUSINESS_THREE_ELEMENT_VERIFY);
    }

    # 企业工商信息查询
    public function businessInfoQuery($accessToken, BusinessInfoQueryReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::CORP_IDENTITY_BUSINESS_INFO_QUERY);
    }

    # 获取个人银行卡四要素校验链接
    public function userFourElementVerify($accessToken, GetUserFourElementVerifyUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::USER_FOUR_ELEMENT_VERIFY_GET_URL);
    }

    # 获取个人运营商三要素校验链接
    public function userThreeElementVerify($accessToken, GetUserThreeElementVerifyUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::USER_THREE_ELEMENT_VERIFY_GET_URL);
    }

    # 获取要素校验身份证图片下载链接
    public function getIdCardImageDownloadUrl($accessToken, GetIdCardImageDownloadUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::USER_ELEMENT_VERIFY_GET_IDCARD_IMAGE_DOWNLOAD_URL);
    }

    /**
     * 证照OCR识别
     */

    # 身份证OCR
    public function IdCardOcr($accessToken, IdCardOcrReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::USER_OCR_ID_CARD);
    }

    # 银行卡OCR
    public function bankCardOcr($accessToken, BankCardOcrReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::USER_OCR_BANKCARD);
    }

    # 驾驶证OCR
    public function drivingLicenseOcr($accessToken, DrivingLicenseOcrReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::USER_OCR_DRIVINGLICENSE);
    }

    # 行驶证OCR
    public function vehicleLicenseOcr($accessToken, VehicleLicenseOcrReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::USER_OCR_VEHICLELICENSE);
    }

    # 港澳通行证OCR
    public function mainlandPermitOcr($accessToken, MainlandPermitOcrReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::USER_OCR_MAINLAND_PERMIT);
    }

    # 营业执照OCR
    public function bizLicenseOcr($accessToken, BizLicenseOcrReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::USER_OCR_LICENSE);
    }

    /**
     * 个人身份核验
     */

    # 获取人脸核验链接
    public function getFaceRecognitionUrl($accessToken, GetFaceRecognitionUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::USER_VERIFY_FACE_RECOGNITION);
    }

    # 获取人脸核验状态
    public function getFaceRecognitionStatus($accessToken, GetFaceRecognitionStatusReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::USER_VERIFY_FACE_STATUS_QUERY);
    }

}
