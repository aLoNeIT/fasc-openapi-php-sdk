<?php
namespace FddCloud\bean\req\seal;
class SealBaseReq
{
    public $createSerialNo;

    public $unauthSuper;

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

    /**
     * @return mixed
     */
    public function getUnauthSuper()
    {
        return $this->unauthSuper;
    }

    /**
     * @param mixed $unauthSuper
     */
    public function setUnauthSuper($unauthSuper)
    {
        $this->unauthSuper = $unauthSuper;
    }


}
