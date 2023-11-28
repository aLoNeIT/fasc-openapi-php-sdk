<?php


namespace FddCloud\bean\req\approval;
class GetApprovalFlowListReq
{
    public $openCorpId;

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
