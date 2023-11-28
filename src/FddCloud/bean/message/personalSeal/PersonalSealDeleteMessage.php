<?php

namespace FddCloud\bean\message\personalSeal;
/**
 * 签名删除事件
 * 个人删除签名，通过该事件回调给应用，事件ID：personal-seal-delete
 */
class PersonalSealDeleteMessage extends MessageBase
{
    public $openUserId;
    public $sealId;
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
