<?php

namespace FddCloud\bean\message\seal;
use FddCloud\bean\message\MessageBase;

/**
 * 印章设置免验证签即将到期事件
 * 印章的免验证签授权即将到期时，会提前15/7/1天通过该事件回调给应用，事件ID：seal-authorize-free-sign-due-cancel
 */
class SealAuthorizeFreeSignDueCancelMessage extends MessageBase
{
    public $openCorpId;
    public $sealId;
    public $businessId;
    public $clientCorpId;
    public $grantEndTime;

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
    public function getBusinessId()
    {
        return $this->businessId;
    }

    /**
     * @param mixed $businessId
     */
    public function setBusinessId($businessId)
    {
        $this->businessId = $businessId;
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

    /**
     * @return mixed
     */
    public function getGrantEndTime()
    {
        return $this->grantEndTime;
    }

    /**
     * @param mixed $grantEndTime
     */
    public function setGrantEndTime($grantEndTime)
    {
        $this->grantEndTime = $grantEndTime;
    }

}
