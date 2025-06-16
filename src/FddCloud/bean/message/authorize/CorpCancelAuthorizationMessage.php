<?php

namespace FddCloud\bean\message\authorize;
use FddCloud\bean\message\MessageBase;

/**
 * 企业用户解除授权事件
 * 用户取消授权后，通过该事件回调给应用系统，事件ID corp-cancel-authorization
 */
class CorpCancelAuthorizationMessage extends MessageBase
{

    public $clientUserId;

    public $openCorpId;


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

}
