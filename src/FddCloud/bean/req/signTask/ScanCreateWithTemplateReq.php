<?php

namespace FddCloud\bean\req\signTask;

class ScanCreateWithTemplateReq extends CreateSignTaskBaseReq
{
    public $scanTaskNum;

    public $signTemplateId;

    public $scanExpiresTime;

    /**
     * @return mixed
     */
    public function getScanTaskNum()
    {
        return $this->scanTaskNum;
    }

    /**
     * @param mixed $scanTaskNum
     */
    public function setScanTaskNum($scanTaskNum)
    {
        $this->scanTaskNum = $scanTaskNum;
    }

    /**
     * @return mixed
     */
    public function getSignTemplateId()
    {
        return $this->signTemplateId;
    }

    /**
     * @param mixed $signTemplateId
     */
    public function setSignTemplateId($signTemplateId)
    {
        $this->signTemplateId = $signTemplateId;
    }

    /**
     * @return mixed
     */
    public function getScanExpiresTime()
    {
        return $this->scanExpiresTime;
    }

    /**
     * @param mixed $scanExpiresTime
     */
    public function setScanExpiresTime($scanExpiresTime)
    {
        $this->scanExpiresTime = $scanExpiresTime;
    }


}

