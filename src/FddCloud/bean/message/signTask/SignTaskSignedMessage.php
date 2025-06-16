<?php

namespace FddCloud\bean\message\signTask;
use FddCloud\bean\message\MessageBase;

/**
 * 签署任务参与方签署成功事件
 * 签署任务中每个签署参与方进行签署，签署成功后通过该事件回调给应用，事件ID: sign-task-signed
 */
class SignTaskSignedMessage extends MessageBase
{
    public $signTaskId;
    public $signTaskStatus;
    public $actorId;
    public $verifyFreeSign;
    public $userName;
    public $transReferenceId;

    /**
     * @return mixed
     */
    public function getSignTaskId()
    {
        return $this->signTaskId;
    }

    /**
     * @param mixed $signTaskId
     */
    public function setSignTaskId($signTaskId)
    {
        $this->signTaskId = $signTaskId;
    }

    /**
     * @return mixed
     */
    public function getSignTaskStatus()
    {
        return $this->signTaskStatus;
    }

    /**
     * @param mixed $signTaskStatus
     */
    public function setSignTaskStatus($signTaskStatus)
    {
        $this->signTaskStatus = $signTaskStatus;
    }

    /**
     * @return mixed
     */
    public function getActorId()
    {
        return $this->actorId;
    }

    /**
     * @param mixed $actorId
     */
    public function setActorId($actorId)
    {
        $this->actorId = $actorId;
    }

    /**
     * @return mixed
     */
    public function getVerifyFreeSign()
    {
        return $this->verifyFreeSign;
    }

    /**
     * @param mixed $verifyFreeSign
     */
    public function setVerifyFreeSign($verifyFreeSign)
    {
        $this->verifyFreeSign = $verifyFreeSign;
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
    public function getTransReferenceId()
    {
        return $this->transReferenceId;
    }

    /**
     * @param mixed $transReferenceId
     */
    public function setTransReferenceId($transReferenceId)
    {
        $this->transReferenceId = $transReferenceId;
    }
}
