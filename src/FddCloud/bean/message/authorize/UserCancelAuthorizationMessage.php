<?php

namespace FddCloud\bean\message\authorize;
/**
 * 个人用户解除授权事件
 * 用户取消授权后，通过该事件回调给应用系统，事件ID user-cancel-authorization
 */
class UserCancelAuthorizationMessage extends MessageBase
{

    public $clientUserId;

    public $openUserId;


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

}
