<?php

namespace FddCloud\bean\req\signTask;
class SignTaskGetFileReq extends SignTaskBaseReq
{
    public $docId;

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

}
