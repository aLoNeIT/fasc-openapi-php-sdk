<?php

namespace FddCloud\bean\message\personalSeal;
use FddCloud\bean\message\MessageBase;

/**
 * 个人签名解除免验证签授权事件
 * 个人用户将签名解除授权免验证签，通过该事件回调给应用（授权到期时不会触发此回调），事件ID：personal-seal-authorize-free-sign-cancel
 */
class PersonalSealAuthorizeFreeSignCancelMessage extends MessageBase
{
    public $openUserId;
    public $sealId;
    public $businessId;
    public $clientUserId;

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

}


