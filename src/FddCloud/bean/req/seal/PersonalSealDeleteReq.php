<?php
namespace FddCloud\bean\req\seal;
class PersonalSealDeleteReq
{
    public $openUserId;

    public $sealId;

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

}
