<?php

namespace FddCloud\bean\message\authorize;
/**
 * 个人用户授权事件
 * 用户授权操作的反馈事件，用户授权允许、不允许或身份信息匹配失败后，通过该事件回调给应用系统，事件ID user-authorize
 */
class UserAuthorizeMessage extends MessageBase
{
    public $clientUserId;
    public $openUserId;
    public $authResult;
    public $authFailedReason;
    public $authScope;
    public $identProcessStatus;
    public $identFailedReason;
    public $identMethod;

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

    /**
     * @return mixed
     */
    public function getAuthResult()
    {
        return $this->authResult;
    }

    /**
     * @param mixed $authResult
     */
    public function setAuthResult($authResult)
    {
        $this->authResult = $authResult;
    }

    /**
     * @return mixed
     */
    public function getAuthFailedReason()
    {
        return $this->authFailedReason;
    }

    /**
     * @param mixed $authFailedReason
     */
    public function setAuthFailedReason($authFailedReason)
    {
        $this->authFailedReason = $authFailedReason;
    }

    /**
     * @return mixed
     */
    public function getAuthScope()
    {
        return $this->authScope;
    }

    /**
     * @param mixed $authScope
     */
    public function setAuthScope($authScope)
    {
        $this->authScope = $authScope;
    }

    /**
     * @return mixed
     */
    public function getIdentProcessStatus()
    {
        return $this->identProcessStatus;
    }

    /**
     * @param mixed $identProcessStatus
     */
    public function setIdentProcessStatus($identProcessStatus)
    {
        $this->identProcessStatus = $identProcessStatus;
    }

    /**
     * @return mixed
     */
    public function getIdentFailedReason()
    {
        return $this->identFailedReason;
    }

    /**
     * @param mixed $identFailedReason
     */
    public function setIdentFailedReason($identFailedReason)
    {
        $this->identFailedReason = $identFailedReason;
    }

    /**
     * @return mixed
     */
    public function getIdentMethod()
    {
        return $this->identMethod;
    }

    /**
     * @param mixed $identMethod
     */
    public function setIdentMethod($identMethod)
    {
        $this->identMethod = $identMethod;
    }

}
