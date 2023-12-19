<?php
namespace FddCloud\bean\req\seal;
class SealBaseReq
{
    public $createSerialNo;

    /**
     * @return mixed
     */
    public function getCreateSerialNo()
    {
        return $this->createSerialNo;
    }

    /**
     * @param mixed $createSerialNo
     */
    public function setCreateSerialNo($createSerialNo) 
    {
        $this->createSerialNo = $createSerialNo;
    }


}
