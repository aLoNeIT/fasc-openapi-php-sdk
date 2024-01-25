<?php


namespace FddCloud\bean\req\signTask;
class SignTaskListFilter
{
    public $signTaskSubject;
    public $signTaskStatus;
    public $startTimeFrom;
    public $startTimeTo;
    public $finishTimeFrom;
    public $finishTimeTo;
    public $expiresTimeFrom;
    public $expiresTimeTo;

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

    /**
     * @return mixed
     */
    public function getStartTimeFrom()
    {
        return $this->startTimeFrom;
    }

    /**
     * @param mixed $startTimeFrom
     */
    public function setStartTimeFrom($startTimeFrom)
    {
        $this->startTimeFrom = $startTimeFrom;
    }

    /**
     * @return mixed
     */
    public function getStartTimeTo()
    {
        return $this->startTimeTo;
    }

    /**
     * @param mixed $startTimeTo
     */
    public function setStartTimeTo($startTimeTo)
    {
        $this->startTimeTo = $startTimeTo;
    }

    /**
     * @return mixed
     */
    public function getFinishTimeFrom()
    {
        return $this->finishTimeFrom;
    }

    /**
     * @param mixed $finishTimeFrom
     */
    public function setFinishTimeFrom($finishTimeFrom)
    {
        $this->finishTimeFrom = $finishTimeFrom;
    }

    /**
     * @return mixed
     */
    public function getFinishTimeTo()
    {
        return $this->finishTimeTo;
    }

    /**
     * @param mixed $finishTimeTo
     */
    public function setFinishTimeTo($finishTimeTo)
    {
        $this->finishTimeTo = $finishTimeTo;
    }

    /**
     * @return mixed
     */
    public function getExpiresTimeFrom()
    {
        return $this->expiresTimeFrom;
    }

    /**
     * @param mixed $expiresTimeFrom
     */
    public function setExpiresTimeFrom($expiresTimeFrom)
    {
        $this->expiresTimeFrom = $expiresTimeFrom;
    }

    /**
     * @return mixed
     */
    public function getExpiresTimeTo()
    {
        return $this->expiresTimeTo;
    }

    /**
     * @param mixed $expiresTimeTo
     */
    public function setExpiresTimeTo($expiresTimeTo)
    {
        $this->expiresTimeTo = $expiresTimeTo;
    }


}
