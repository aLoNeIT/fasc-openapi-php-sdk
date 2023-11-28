<?php


namespace FddCloud\bean\req\signTask;
class FillField
{
    public $fieldDocId;

    public $fieldId;

    public $fieldName;

    public $fieldValue;

    /**
     * @return mixed
     */
    public function getFieldDocId()
    {
        return $this->fieldDocId;
    }

    /**
     * @param mixed $fieldDocId
     */
    public function setFieldDocId($fieldDocId)
    {
        $this->fieldDocId = $fieldDocId;
    }

    /**
     * @return mixed
     */
    public function getFieldId()
    {
        return $this->fieldId;
    }

    /**
     * @param mixed $fieldId
     */
    public function setFieldId($fieldId)
    {
        $this->fieldId = $fieldId;
    }

    /**
     * @return mixed
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * @param mixed $fieldName
     */
    public function setFieldName($fieldName)
    {
        $this->fieldName = $fieldName;
    }

    /**
     * @return mixed
     */
    public function getFieldValue()
    {
        return $this->fieldValue;
    }

    /**
     * @param mixed $fieldValue
     */
    public function setFieldValue($fieldValue)
    {
        $this->fieldValue = $fieldValue;
    }


}
