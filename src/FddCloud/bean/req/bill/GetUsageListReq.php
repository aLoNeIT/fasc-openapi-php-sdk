<?php
namespace FddCloud\bean\req\bill;
class GetUsageListReq
{
    public $ownerOpenId;
    public $accountType;
    public $usageCode;

    /**
     * @return mixed
     */
    public function getOwnerOpenId()
    {
        return $this->ownerOpenId;
    }

    /**
     * @param mixed $ownerOpenId
     */
    public function setOwnerOpenId($ownerOpenId)
    {
        $this->ownerOpenId = $ownerOpenId;
    }

    /**
     * @return mixed
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * @param mixed $accountType
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
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
