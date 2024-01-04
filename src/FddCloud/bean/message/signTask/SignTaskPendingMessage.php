<?php

namespace FddCloud\bean\message\signTask;
use FddCloud\bean\message\MessageBase;

/**
 * 签署任务待处理事件（API3.0任务专属）
 * 其他的企业在法大大3.0发起一个任务后，企业A作为任务的参与方之一，可以通过FASC集成应用中的回调地址接收3.0任务的待处理事件，从而可以在自己业务系统中完成任务签署，事件ID：sign-task-pending
 */
class SignTaskPendingMessage extends MessageBase
{
    public $signTaskId;

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

}
