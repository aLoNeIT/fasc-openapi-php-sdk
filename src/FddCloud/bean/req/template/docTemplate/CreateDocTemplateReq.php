<?php


namespace FddCloud\bean\req\template\docTemplate;
class CreateDocTemplateReq
{
    public $openCorpId;

    public $docTemplateName;

    public $createSerialNo;

    public $fileId;

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

    /**
     * @return mixed
     */
    public function getFileId()
    {
        return $this->fileId;
    }

    /**
     * @param mixed $fileId
     */
    public function setFileId($fileId)
    {
        $this->fileId = $fileId;
    }

}
