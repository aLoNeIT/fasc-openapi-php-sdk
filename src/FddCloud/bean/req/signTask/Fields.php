<?php


namespace FddCloud\bean\req\signTask;
class Fields
{
    public $docId;

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
