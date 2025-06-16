<?php


namespace FddCloud\bean\req\org\member;

require_once "MemberBaseReq.php";

class MemberGetDetailReq extends MemberBaseReq
{
    public $memberId;
    public $internalIdentifier;

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

    /**
     * @return mixed
     */
    public function getInternalIdentifier()
    {
        return $this->internalIdentifier;
    }

    /**
     * @param mixed $internalIdentifier
     */
    public function setInternalIdentifier($internalIdentifier)
    {
        $this->internalIdentifier = $internalIdentifier;
    }

}
