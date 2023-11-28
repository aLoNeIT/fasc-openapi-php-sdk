<?php


namespace FddCloud\bean\req\approval;
class GetApprovalDetailReq
{
    public $openCorpId;

    public $approvalType;

    public $approvalId;

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
    public function getApprovalId()
    {
        return $this->approvalId;
    }

    /**
     * @param mixed $approvalId
     */
    public function setApprovalId($approvalId)
    {
        $this->approvalId = $approvalId;
    }

}
