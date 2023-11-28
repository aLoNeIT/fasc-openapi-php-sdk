<?php


namespace FddCloud\bean\req\template\signTemplate;
class SetSignTemplateStatusReq
{
    public $openCorpId;

    public $signTemplateId;

    public $signTemplateStatus;

    /**
     * @return mixed
     */
    public function getOpenCorpId()
    {
        return $this->openCorpId;
    }

    /**
     * @param mixed $openCorpId
     */
    public function setOpenCorpId($openCorpId)
    {
        $this->openCorpId = $openCorpId;
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
    public function getSignTemplateStatus()
    {
        return $this->signTemplateStatus;
    }

    /**
     * @param mixed $signTemplateStatus
     */
    public function setSignTemplateStatus($signTemplateStatus)
    {
        $this->signTemplateStatus = $signTemplateStatus;
    }

}
