<?php


namespace FddCloud\bean\req\org\member;
class OrgListFilterInfo
{
    public $roleType;

    /**
     * @return mixed
     */
    public function getRoleType()
    {
        return $this->roleType;
    }

    /**
     * @param mixed $roleType
     */
    public function setRoleType($roleType)
    {
        $this->roleType = $roleType;
    }


}