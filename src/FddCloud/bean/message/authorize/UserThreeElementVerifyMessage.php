<?php

namespace FddCloud\bean\message\authorize;
/**
 * 个人三要素校验事件
 * 用户进行三要素校验后，通过该事件回调给应用系统，事件ID user-three-element-verify
 */
class UserThreeElementVerifyMessage extends MessageBase
{

    public $clientUserId;

    public $verifyResult;

    public $userName;

    public $userIdentNo;

    public $mobile;

    public $verifyId;


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
    public function getVerifyResult()
    {
        return $this->verifyResult;
    }

    /**
     * @param mixed $verifyResult
     */
    public function setVerifyResult($verifyResult)
    {
        $this->verifyResult = $verifyResult;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * @return mixed
     */
    public function getUserIdentNo()
    {
        return $this->userIdentNo;
    }

    /**
     * @param mixed $userIdentNo
     */
    public function setUserIdentNo($userIdentNo)
    {
        $this->userIdentNo = $userIdentNo;
    }

    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param mixed $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
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

}
