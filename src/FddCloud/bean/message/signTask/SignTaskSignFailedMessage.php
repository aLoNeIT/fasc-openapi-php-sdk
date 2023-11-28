<?php

namespace FddCloud\bean\message\signTask;
/**
 * 签署任务签署失败事件
 * 目前只有参与方免验证签署失败，通过该事件回调给应用，事件ID: sign-task-sign-failed
 */
class SignTaskSignFailedMessage extends MessageBase
{
    public $signTaskId;
    public $signTaskStatus;
    public $actorId;
    public $verifyFreeSign;
    public $signFailedReason;
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
    public function getSignFailedReason()
    {
        return $this->signFailedReason;
    }

    /**
     * @param mixed $signFailedReason
     */
    public function setSignFailedReason($signFailedReason)
    {
        $this->signFailedReason = $signFailedReason;
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
