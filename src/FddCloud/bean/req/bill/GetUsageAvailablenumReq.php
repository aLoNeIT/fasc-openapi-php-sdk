<?php
namespace FddCloud\bean\req\bill;
class GetUsageAvailablenumReq
{
    public $openCorpId;
    public $usageCode;

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
    public function getUsageCode()
    {
        return $this->usageCode;
    }

    /**
     * @param mixed $usageCode
     */
    public function setUsageCode($usageCode)
    {
        $this->usageCode = $usageCode;
    }

}
