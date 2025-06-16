<?php

namespace FddCloud\bean\message\signTask;

use FddCloud\bean\message\MessageBase;

/**
 * 签署任务撤销事件
 * 签署任务撤销之后，通过该事件回调给应用，事件ID: sign-task-canceled
 */
class SignTaskCanceledMessage extends MessageBase
{
    public $signTaskId;
    public $signTaskStatus;
    public $transReferenceId;
    public $userName;
    public $terminationNote;

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
    public function getTerminationNote()
    {
        return $this->terminationNote;
    }

    /**
     * @param mixed $terminationNote
     */
    public function setTerminationNote($terminationNote)
    {
        $this->terminationNote = $terminationNote;
    }
}
