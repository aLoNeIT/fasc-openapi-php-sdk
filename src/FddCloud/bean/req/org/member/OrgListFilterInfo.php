<?php


namespace FddCloud\bean\req\org\member;
class OrgListFilterInfo
{
    public $roleType;
    public $deptId;
    public $fetchChild;

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

    /**
     * @return mixed
     */
    public function getDeptId()
    {
        return $this->deptId;
    }

    /**
     * @param mixed $deptId
     */
    public function setDeptId($deptId)
    {
        $this->deptId = $deptId;
    }

    /**
     * @return mixed
     */
    public function getFetchChild()
    {
        return $this->fetchChild;
    }

    /**
     * @param mixed $fetchChild
     */
    public function setFetchChild($fetchChild)
    {
        $this->fetchChild = $fetchChild;
    }


}