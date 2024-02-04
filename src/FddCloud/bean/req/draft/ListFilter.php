<?php
namespace FddCloud\bean\req\draft;

class ListFilter
{
    public $contractSubject;
    public $contractStatus;
    public $startTime;
    public $endTime;

    /**
     * @return mixed
     */
    public function getContractSubject()
    {
        return $this->contractSubject;
    }

    /**
     * @param mixed $contractSubject
     */
    public function setContractSubject($contractSubject)
    {
        $this->contractSubject = $contractSubject;
    }

    /**
     * @return mixed
     */
    public function getContractStatus()
    {
        return $this->contractStatus;
    }

    /**
     * @param mixed $contractStatus
     */
    public function setContractStatus($contractStatus)
    {
        $this->contractStatus = $contractStatus;
    }

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param mixed $startTime
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param mixed $endTime
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }

}
