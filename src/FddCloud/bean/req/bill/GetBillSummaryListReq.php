<?php
namespace FddCloud\bean\req\bill;
class GetBillSummaryListReq
{
    public $ownerOpenId;
    public $accountType;
    public $usageCode;
    public $billType;
    public $summaryPeriod;
    public $listPageNo;
    public $listPageSize;

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

    /**
     * @return mixed
     */
    public function getBillType()
    {
        return $this->billType;
    }

    /**
     * @param mixed $billType
     */
    public function setBillType($billType)
    {
        $this->billType = $billType;
    }

    /**
     * @return mixed
     */
    public function getSummaryPeriod()
    {
        return $this->summaryPeriod;
    }

    /**
     * @param mixed $summaryPeriod
     */
    public function setSummaryPeriod($summaryPeriod)
    {
        $this->summaryPeriod = $summaryPeriod;
    }

    /**
     * @return mixed
     */
    public function getListPageNo()
    {
        return $this->listPageNo;
    }

    /**
     * @param mixed $listPageNo
     */
    public function setListPageNo($listPageNo)
    {
        $this->listPageNo = $listPageNo;
    }

    /**
     * @return mixed
     */
    public function getListPageSize()
    {
        return $this->listPageSize;
    }

    /**
     * @param mixed $listPageSize
     */
    public function setListPageSize($listPageSize)
    {
        $this->listPageSize = $listPageSize;
    }

}
