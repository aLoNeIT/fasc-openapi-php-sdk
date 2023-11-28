<?php


namespace FddCloud\bean\req\signTask;
class AddDocInfo
{
    public $docId;

    public $docName;

    public $docFileId;

    public $docTemplateId;

    public $docFields;

    /**
     * @return mixed
     */
    public function getDocId()
    {
        return $this->docId;
    }

    /**
     * @param mixed $docId
     */
    public function setDocId($docId)
    {
        $this->docId = $docId;
    }

    /**
     * @return mixed
     */
    public function getDocName()
    {
        return $this->docName;
    }

    /**
     * @param mixed $docName
     */
    public function setDocName($docName)
    {
        $this->docName = $docName;
    }

    /**
     * @return mixed
     */
    public function getDocFileId()
    {
        return $this->docFileId;
    }

    /**
     * @param mixed $docFileId
     */
    public function setDocFileId($docFileId)
    {
        $this->docFileId = $docFileId;
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
    public function getDocFields()
    {
        return $this->docFields;
    }

    /**
     * @param mixed $docFields
     */
    public function setDocFields($docFields)
    {
        $this->docFields = $docFields;
    }


}
