<?php


namespace FddCloud\bean\req\template\docTemplate;
class CopyCreateDocTemplateReq
{
    public $openCorpId;

    public $docTemplateId;

    public $docTemplateName;

    public $createSerialNo;

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
    public function getDocTemplateName()
    {
        return $this->docTemplateName;
    }

    /**
     * @param mixed $docTemplateName
     */
    public function setDocTemplateName($docTemplateName)
    {
        $this->docTemplateName = $docTemplateName;
    }

    /**
     * @return mixed
     */
    public function getCreateSerialNo()
    {
        return $this->createSerialNo;
    }

    /**
     * @param mixed $createSerialNo
     */
    public function setCreateSerialNo($createSerialNo)
    {
        $this->createSerialNo = $createSerialNo;
    }

}
