<?php

namespace FddCloud\bean\message\signTask;

use FddCloud\bean\message\MessageBase;

/**
 * 签署任务延期事件
 * 签署任务延期时，通过该事件回调给应用，事件ID: sign-task-extension
 */
class SignTaskExtensionMessage extends MessageBase
{
    public $signTaskId;
    public $signTaskStatus;
    public $expiresTime;
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
    public function getExpiresTime()
    {
        return $this->expiresTime;
    }

    /**
     * @param mixed $expiresTime
     */
    public function setExpiresTime($expiresTime)
    {
        $this->expiresTime = $expiresTime;
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