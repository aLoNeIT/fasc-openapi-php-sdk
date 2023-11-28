<?php

namespace FddCloud\bean\message\signTask;
/**
 * 签署任务参与方拒填事件
 * 签署任务中的参与方拒填之后，通过该事件回调给应用，事件ID: sign-task-fill-rejected
 *
 */
class SignTaskFillRejectedMessage extends MessageBase
{
    public $signTaskId;
    public $signTaskStatus;
    public $actorId;
    public $fillRejectReason;
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
    public function getFillRejectReason()
    {
        return $this->fillRejectReason;
    }

    /**
     * @param mixed $fillRejectReason
     */
    public function setFillRejectReason($fillRejectReason)
    {
        $this->fillRejectReason = $fillRejectReason;
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
