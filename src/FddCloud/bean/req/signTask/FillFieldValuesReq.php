<?php


namespace FddCloud\bean\req\signTask;

class FillFieldValuesReq extends SignTaskBaseReq
{
    public $docFieldValues;

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
