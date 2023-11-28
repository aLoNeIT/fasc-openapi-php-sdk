<?php


namespace FddCloud\bean\req\org\member;

require_once "MemberBaseReq.php";

class MemberGetDetailReq extends MemberBaseReq
{
    public $memberId;

    /**
     * @return mixed
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * @param mixed $memberId
     */
    public function setMemberId($memberId)
    {
        $this->memberId = $memberId;
    }


}
