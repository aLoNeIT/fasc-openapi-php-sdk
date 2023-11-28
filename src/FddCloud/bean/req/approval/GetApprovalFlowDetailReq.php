<?php


namespace FddCloud\bean\req\approval;
class GetApprovalFlowDetailReq
{
    public $openCorpId;

    public $approvalFlowId;

    public $approvalType;

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
    public function getApprovalFlowId()
    {
        return $this->approvalFlowId;
    }

    /**
     * @param mixed $approvalFlowId
     */
    public function setApprovalFlowId($approvalFlowId)
    {
        $this->approvalFlowId = $approvalFlowId;
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

}
