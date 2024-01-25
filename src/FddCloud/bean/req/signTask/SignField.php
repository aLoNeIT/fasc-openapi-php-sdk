<?php


namespace FddCloud\bean\req\signTask;
class SignField
{
    public $fieldDocId;

    public $fieldId;

    public $fieldName;

    public $sealId;

    /**
     * @deprecated 弃用字段
     */
    public $moveable;

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
    public function getSealId()
    {
        return $this->sealId;
    }

    /**
     * @param mixed $sealId
     */
    public function setSealId($sealId)
    {
        $this->sealId = $sealId;
    }

    /**
     * @return mixed
     */
    public function getMoveable()
    {
        return $this->moveable;
    }

    /**
     * @param mixed $moveable
     */
    public function setMoveable($moveable)
    {
        $this->moveable = $moveable;
    }

}
