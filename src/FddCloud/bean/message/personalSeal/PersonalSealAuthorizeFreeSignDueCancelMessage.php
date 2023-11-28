<?php

namespace FddCloud\bean\message\personalSeal;
/**
 * 签名免验证签即将到期事件
 * 签名的免验证签授权即将到期时，会提前15/7/1天通过该事件回调给应用，事件ID：personal-seal-authorize-free-sign-due-cancel
 */
class PersonalSealAuthorizeFreeSignDueCancelMessage extends MessageBase
{
    public $openUserId;
    public $sealId;
    public $businessId;
    public $clientUserId;
    public $grantEndTime;

    /**
     * @return mixed
     */
    public function getOpenUserId()
    {
        return $this->openUserId;
    }

    /**
     * @param mixed $openUserId
     */
    public function setOpenUserId($openUserId)
    {
        $this->openUserId = $openUserId;
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
    public function getClientUserId()
    {
        return $this->clientUserId;
    }

    /**
     * @param mixed $clientUserId
     */
    public function setClientUserId($clientUserId)
    {
        $this->clientUserId = $clientUserId;
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

