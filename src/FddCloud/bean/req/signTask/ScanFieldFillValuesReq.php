<?php

namespace FddCloud\bean\req\signTask;
class ScanFieldFillValuesReq
{
    public $batchId;
    public $docFieldValues;

    /**
     * @return mixed
     */
    public function getBatchId()
    {
        return $this->batchId;
    }

    /**
     * @param mixed $batchId
     */
    public function setBatchId($batchId)
    {
        $this->batchId = $batchId;
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
