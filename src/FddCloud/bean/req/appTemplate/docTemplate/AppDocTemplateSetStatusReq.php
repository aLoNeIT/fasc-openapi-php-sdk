<?php


namespace FddCloud\bean\req\appTemplate\docTemplate;
class AppDocTemplateSetStatusReq
{
    public $appDocTemplateId;

    public $appDocTemplateStatus;

    /**
     * @return mixed
     */
    public function getAppDocTemplateId()
    {
        return $this->appDocTemplateId;
    }

    /**
     * @param mixed $appDocTemplateId
     */
    public function setAppDocTemplateId($appDocTemplateId)
    {
        $this->appDocTemplateId = $appDocTemplateId;
    }

    /**
     * @return mixed
     */
    public function getAppDocTemplateStatus()
    {
        return $this->appDocTemplateStatus;
    }

    /**
     * @param mixed $appDocTemplateStatus
     */
    public function setAppDocTemplateStatus($appDocTemplateStatus)
    {
        $this->appDocTemplateStatus = $appDocTemplateStatus;
    }


}
