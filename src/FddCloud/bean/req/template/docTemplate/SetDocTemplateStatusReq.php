<?php


namespace FddCloud\bean\req\template\docTemplate;
class SetDocTemplateStatusReq
{
    public $openCorpId;

    public $docTemplateId;

    public $docTemplateStatus;

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
    public function getDocTemplateId()
    {
        return $this->docTemplateId;
    }

    /**
     * @param mixed $docTemplateId
     */
    public function setDocTemplateId($docTemplateId)
    {
        $this->docTemplateId = $docTemplateId;
    }

    /**
     * @return mixed
     */
    public function getDocTemplateStatus()
    {
        return $this->docTemplateStatus;
    }

    /**
     * @param mixed $docTemplateStatus
     */
    public function setDocTemplateStatus($docTemplateStatus)
    {
        $this->docTemplateStatus = $docTemplateStatus;
    }


}
