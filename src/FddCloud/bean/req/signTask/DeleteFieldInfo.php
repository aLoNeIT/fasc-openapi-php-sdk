<?php


namespace FddCloud\bean\req\signTask;
class DeleteFieldInfo
{
    public $docId;

    public $fieldIds;

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
    public function getFieldIds()
    {
        return $this->fieldIds;
    }

    /**
     * @param mixed $fieldIds
     */
    public function setFieldIds($fieldIds)
    {
        $this->fieldIds = $fieldIds;
    }


}
