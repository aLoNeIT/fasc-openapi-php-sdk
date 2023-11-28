<?php


namespace FddCloud\bean\req\appTemplate\appField;
class AppFieldSetStatusReq
{
    public $fieldKey;

    public $fieldStatus;

    /**
     * @return mixed
     */
    public function getFieldKey()
    {
        return $this->fieldKey;
    }

    /**
     * @param mixed $fieldKey
     */
    public function setFieldKey($fieldKey)
    {
        $this->fieldKey = $fieldKey;
    }

    /**
     * @return mixed
     */
    public function getFieldStatus()
    {
        return $this->fieldStatus;
    }

    /**
     * @param mixed $fieldStatus
     */
    public function setFieldStatus($fieldStatus)
    {
        $this->fieldStatus = $fieldStatus;
    }


}
