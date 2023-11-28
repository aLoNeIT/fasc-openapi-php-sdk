<?php


namespace FddCloud\bean\req\template\docTemplate;
class FillValueDocTemplateReq
{
    public $openCorpId;

    public $docTemplateId;

    public $fileName;

    public $docFieldValues;

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
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param mixed $fileName
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * @return mixed
     */
    public function getDocFieldValues()
    {
        return $this->docFieldValues;
    }

    /**
     * @param mixed $docFieldValues
     */
    public function setDocFieldValues($docFieldValues)
    {
        $this->docFieldValues = $docFieldValues;
    }

}
