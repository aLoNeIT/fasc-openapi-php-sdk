<?php


namespace FddCloud\bean\req\signTask;
class SignTaskListFilter
{
    public $signTaskSubject;

    public $signTaskStatus;

    /**
     * @return mixed
     */
    public function getSignTaskSubject()
    {
        return $this->signTaskSubject;
    }

    /**
     * @param mixed $signTaskSubject
     */
    public function setSignTaskSubject($signTaskSubject)
    {
        $this->signTaskSubject = $signTaskSubject;
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


}
