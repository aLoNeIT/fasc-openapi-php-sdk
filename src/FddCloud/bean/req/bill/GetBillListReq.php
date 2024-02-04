<?php
namespace FddCloud\bean\req\bill;
class GetBillListReq
{
    public $ownerOpenId;
    public $accountType;
    public $usageCode;
    public $billType;
    public $billTimeStart;
    public $billTimeEnd;
    public $billFrom;
    public $billId;
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
    public function getBillTimeStart()
    {
        return $this->billTimeStart;
    }

    /**
     * @param mixed $billTimeStart
     */
    public function setBillTimeStart($billTimeStart)
    {
        $this->billTimeStart = $billTimeStart;
    }

    /**
     * @return mixed
     */
    public function getBillTimeEnd()
    {
        return $this->billTimeEnd;
    }

    /**
     * @param mixed $billTimeEnd
     */
    public function setBillTimeEnd($billTimeEnd)
    {
        $this->billTimeEnd = $billTimeEnd;
    }

    /**
     * @return mixed
     */
    public function getBillFrom()
    {
        return $this->billFrom;
    }

    /**
     * @param mixed $billFrom
     */
    public function setBillFrom($billFrom)
    {
        $this->billFrom = $billFrom;
    }

    /**
     * @return mixed
     */
    public function getBillId()
    {
        return $this->billId;
    }

    /**
     * @param mixed $billId
     */
    public function setBillId($billId)
    {
        $this->billId = $billId;
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
