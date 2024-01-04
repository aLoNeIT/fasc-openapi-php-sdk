<?php

namespace FddCloud\bean\message\authorize;

use FddCloud\bean\message\MessageBase;

/**
 * 企业用户授权事件
 * 企业授权操作的反馈事件，企业用户授权允许后，通过该事件回调给应用，事件ID: corp-authorize
 */
class CorpAuthorizeMessage extends MessageBase
{
    public $clientUserId;
    public $clientCorpId;
    public $openCorpId;
    public $existClientCorpId;
    public $existOpenCorpId;
    public $authResult;
    public $authFailedReason;
    public $authScope;
    public $corpIdentProcessStatus;
    public $corpIdentFailedReason;
    public $corpIdentMethod;

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
    public function getExistClientCorpId()
    {
        return $this->existClientCorpId;
    }

    /**
     * @param mixed $existClientCorpId
     */
    public function setExistClientCorpId($existClientCorpId)
    {
        $this->existClientCorpId = $existClientCorpId;
    }

    /**
     * @return mixed
     */
    public function getExistOpenCorpId()
    {
        return $this->existOpenCorpId;
    }

    /**
     * @param mixed $existOpenCorpId
     */
    public function setExistOpenCorpId($existOpenCorpId)
    {
        $this->existOpenCorpId = $existOpenCorpId;
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
    public function getCorpIdentProcessStatus()
    {
        return $this->corpIdentProcessStatus;
    }

    /**
     * @param mixed $corpIdentProcessStatus
     */
    public function setCorpIdentProcessStatus($corpIdentProcessStatus)
    {
        $this->corpIdentProcessStatus = $corpIdentProcessStatus;
    }

    /**
     * @return mixed
     */
    public function getCorpIdentFailedReason()
    {
        return $this->corpIdentFailedReason;
    }

    /**
     * @param mixed $corpIdentFailedReason
     */
    public function setCorpIdentFailedReason($corpIdentFailedReason)
    {
        $this->corpIdentFailedReason = $corpIdentFailedReason;
    }

    /**
     * @return mixed
     */
    public function getCorpIdentMethod()
    {
        return $this->corpIdentMethod;
    }

    /**
     * @param mixed $corpIdentMethod
     */
    public function setCorpIdentMethod($corpIdentMethod)
    {
        $this->corpIdentMethod = $corpIdentMethod;
    }


}
