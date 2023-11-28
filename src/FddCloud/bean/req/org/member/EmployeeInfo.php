<?php


namespace FddCloud\bean\req\org\member;
class EmployeeInfo
{
    public $memberName;

    public $internalIdentifier;

    public $memberEmail;

    public $memberMobile;

    public $memberDeptIds;

    /**
     * @return mixed
     */
    public function getMemberName()
    {
        return $this->memberName;
    }

    /**
     * @param mixed $memberName
     */
    public function setMemberName($memberName)
    {
        $this->memberName = $memberName;
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

    /**
     * @return mixed
     */
    public function getMemberEmail()
    {
        return $this->memberEmail;
    }

    /**
     * @param mixed $memberEmail
     */
    public function setMemberEmail($memberEmail)
    {
        $this->memberEmail = $memberEmail;
    }

    /**
     * @return mixed
     */
    public function getMemberMobile()
    {
        return $this->memberMobile;
    }

    /**
     * @param mixed $memberMobile
     */
    public function setMemberMobile($memberMobile)
    {
        $this->memberMobile = $memberMobile;
    }

    /**
     * @return mixed
     */
    public function getMemberDeptIds()
    {
        return $this->memberDeptIds;
    }

    /**
     * @param mixed $memberDeptIds
     */
    public function setMemberDeptIds($memberDeptIds)
    {
        $this->memberDeptIds = $memberDeptIds;
    }


}
