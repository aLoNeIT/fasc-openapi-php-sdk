<?php

namespace FddCloud\bean\message\signTask;

use FddCloud\bean\message\MessageBase;

/**
 * 签署任务作废事件
 * 作废任务已完成时，原任务状态变为【已作废】，签署任务通过该事件回调给应用，事件ID: sign-task-abolish
 */
class SignTaskAbolishMessage extends MessageBase
{
    public $signTaskId;
    public $signTaskStatus;
    public $abolishedSignTaskId;
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
    public function getAbolishedSignTaskId()
    {
        return $this->abolishedSignTaskId;
    }

    /**
     * @param mixed $abolishedSignTaskId
     */
    public function setAbolishedSignTaskId($abolishedSignTaskId)
    {
        $this->abolishedSignTaskId = $abolishedSignTaskId;
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
