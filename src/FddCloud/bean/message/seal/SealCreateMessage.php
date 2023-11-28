<?php

namespace FddCloud\bean\message\seal;
/**
 * 印章创建事件
 * 企业用户创建印章后，通过该事件回调给应用，事件ID: seal-create
 * 接收事件后，对于使用法大大模板制作的印章，可使用sealId通过【查询印章详情】查询具体内容；对于使用本地图片上传制作的印章，可使用verifyId通过【查询审核中的印章列表】查询具体内容。
 */
class SealCreateMessage extends MessageBase
{
    public $openCorpId;
    public $sealId;
    public $verifyId;
    public $createSerialNo;
    public $clientCorpId;

    /**
     * @return mixed
     */
    public function getOpenCorpId()
    {
        return $this->openCorpId;
    }

    /**
     * @param mixed $openCorpId
     */
    public function setOpenCorpId($openCorpId)
    {
        $this->openCorpId = $openCorpId;
    }

    /**
     * @return mixed
     */
    public function getSealId()
    {
        return $this->sealId;
    }

    /**
     * @param mixed $sealId
     */
    public function setSealId($sealId)
    {
        $this->sealId = $sealId;
    }

    /**
     * @return mixed
     */
    public function getVerifyId()
    {
        return $this->verifyId;
    }

    /**
     * @param mixed $verifyId
     */
    public function setVerifyId($verifyId)
    {
        $this->verifyId = $verifyId;
    }

    /**
     * @return mixed
     */
    public function getCreateSerialNo()
    {
        return $this->createSerialNo;
    }

    /**
     * @param mixed $createSerialNo
     */
    public function setCreateSerialNo($createSerialNo)
    {
        $this->createSerialNo = $createSerialNo;
    }

    /**
     * @return mixed
     */
    public function getClientCorpId()
    {
        return $this->clientCorpId;
    }

    /**
     * @param mixed $clientCorpId
     */
    public function setClientCorpId($clientCorpId)
    {
        $this->clientCorpId = $clientCorpId;
    }

}
