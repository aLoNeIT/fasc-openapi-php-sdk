<?php

namespace FddCloud\bean\req\callback;
class GetCallBackListReq
{
    public $callbackType;

    public $startTime;

    public $endTime;

    public $listPageNo;

    public $listPageSize;

    /**
     * @return mixed
     */
    public function getCallbackType()
    {
        return $this->callbackType;
    }

    /**
     * @param mixed $callbackType
     */
    public function setCallbackType($callbackType)
    {
        $this->callbackType = $callbackType;
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

    /**
     * @return mixed
     */
    public function getListPageNo()
    {
        return $this->listPageNo;
    }

    /**
     * @param mixed $listPageNo
     */
    public function setListPageNo($listPageNo)
    {
        $this->listPageNo = $listPageNo;
    }

    /**
     * @return mixed
     */
    public function getListPageSize()
    {
        return $this->listPageSize;
    }

    /**
     * @param mixed $listPageSize
     */
    public function setListPageSize($listPageSize)
    {
        $this->listPageSize = $listPageSize;
    }


}