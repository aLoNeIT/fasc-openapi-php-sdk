<?php


namespace FddCloud\bean\req\appTemplate\signTemplate;
class AppSignTemplateSetStatusReq
{
    public $appSignTemplateId;

    public $appSignTemplateStatus;

    /**
     * @return mixed
     */
    public function getAppSignTemplateId()
    {
        return $this->appSignTemplateId;
    }

    /**
     * @param mixed $appSignTemplateId
     */
    public function setAppSignTemplateId($appSignTemplateId)
    {
        $this->appSignTemplateId = $appSignTemplateId;
    }

    /**
     * @return mixed
     */
    public function getAppSignTemplateStatus()
    {
        return $this->appSignTemplateStatus;
    }

    /**
     * @param mixed $appSignTemplateStatus
     */
    public function setAppSignTemplateStatus($appSignTemplateStatus)
    {
        $this->appSignTemplateStatus = $appSignTemplateStatus;
    }

}
