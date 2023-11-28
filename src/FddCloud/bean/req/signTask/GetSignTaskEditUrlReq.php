<?php


namespace FddCloud\bean\req\signTask;

class GetSignTaskEditUrlReq extends SignTaskBaseReq
{
    public $nonEditableInfo;

    /**
     * @return mixed
     */
    public function getNonEditableInfo()
    {
        return $this->nonEditableInfo;
    }

    /**
     * @param mixed $nonEditableInfo
     */
    public function setNonEditableInfo($nonEditableInfo)
    {
        $this->nonEditableInfo = $nonEditableInfo;
    }


}
