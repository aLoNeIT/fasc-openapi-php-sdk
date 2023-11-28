<?php


namespace FddCloud\bean\req\approval;
class GetApprovalInfoListReq
{
    public $openCorpId;
    public $approvalType;
    public $listPageNo;
    public $listPageSize;

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
    public function getApprovalType()
    {
        return $this->approvalType;
    }

    /**
     * @param mixed $approvalType
     */
    public function setApprovalType($approvalType)
    {
        $this->approvalType = $approvalType;
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
