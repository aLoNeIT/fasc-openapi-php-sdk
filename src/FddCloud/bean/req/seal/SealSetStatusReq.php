<?php
namespace FddCloud\bean\req\seal;
class SealSetStatusReq
{
    public $openCorpId;

    public $sealId;

    public $sealStatus;

    /**
     * @return mixed
     */
    public function getOpenCorpId()
    {
        return $this->openCorpId;
    }

    /**
     * @param mixed $openCorpId
     */
    public function setOpenCorpId($openCorpId)
    {
        $this->openCorpId = $openCorpId;
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
    public function getSealStatus()
    {
        return $this->sealStatus;
    }

    /**
     * @param mixed $sealStatus
     */
    public function setSealStatus($sealStatus)
    {
        $this->sealStatus = $sealStatus;
    }


}
