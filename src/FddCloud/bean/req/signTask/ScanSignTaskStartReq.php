<?php

namespace FddCloud\bean\req\signTask;
class ScanSignTaskStartReq
{
    public $batchId;

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


}
