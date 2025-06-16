<?php
namespace FddCloud\bean\req\seal;
class CancelPersonalSealFreeSignReq
{
    public $openUserId;

    public $sealId;

    public $businessId;

    /**
     * @return mixed
     */
    public function getOpenUserId()
    {
        return $this->openUserId;
    }

    /**
     * @param mixed $openUserId
     */
    public function setOpenUserId($openUserId) 
    {
        $this->openUserId = $openUserId;
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
    public function getBusinessId()
    {
        return $this->businessId;
    }

    /**
     * @param mixed $businessId
     */
    public function setBusinessId($businessId) 
    {
        $this->businessId = $businessId;
    }

}
