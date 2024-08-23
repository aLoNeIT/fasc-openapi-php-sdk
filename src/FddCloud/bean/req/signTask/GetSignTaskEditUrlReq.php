<?php


namespace FddCloud\bean\req\signTask;

class GetSignTaskEditUrlReq extends SignTaskBaseReq
{
    public $nonEditableInfo;

    public $editAfterStart;

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

    /**
     * @return mixed
     */
    public function getEditAfterStart()
    {
        return $this->editAfterStart;
    }

    /**
     * @param mixed $editAfterStart
     */
    public function setEditAfterStart($editAfterStart)
    {
        $this->editAfterStart = $editAfterStart;
    }


}
