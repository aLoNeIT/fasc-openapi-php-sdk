<?php


namespace FddCloud\bean\req\org\member;

require_once "MemberBaseReq.php";

class MemberSetStatusReq extends MemberBaseReq
{
    public $memberIds;

    public $memberStatus;

    /**
     * @return mixed
     */
    public function getMemberIds()
    {
        return $this->memberIds;
    }

    /**
     * @param mixed $memberIds
     */
    public function setMemberIds($memberIds)
    {
        $this->memberIds = $memberIds;
    }

    /**
     * @return mixed
     */
    public function getMemberStatus()
    {
        return $this->memberStatus;
    }

    /**
     * @param mixed $memberStatus
     */
    public function setMemberStatus($memberStatus)
    {
        $this->memberStatus = $memberStatus;
    }


}
