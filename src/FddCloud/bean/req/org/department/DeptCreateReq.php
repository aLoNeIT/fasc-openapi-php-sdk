<?php


namespace FddCloud\bean\req\org\department;
class DeptCreateReq
{
    public $openCorpId;

    public $parentDeptId;

    public $deptName;

    public $deptOrderNum;

    public $identifier;

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
    public function getParentDeptId()
    {
        return $this->parentDeptId;
    }

    /**
     * @param mixed $parentDeptId
     */
    public function setParentDeptId($parentDeptId)
    {
        $this->parentDeptId = $parentDeptId;
    }

    /**
     * @return mixed
     */
    public function getDeptName()
    {
        return $this->deptName;
    }

    /**
     * @param mixed $deptName
     */
    public function setDeptName($deptName)
    {
        $this->deptName = $deptName;
    }

    /**
     * @return mixed
     */
    public function getDeptOrderNum()
    {
        return $this->deptOrderNum;
    }

    /**
     * @param mixed $deptOrderNum
     */
    public function setDeptOrderNum($deptOrderNum)
    {
        $this->deptOrderNum = $deptOrderNum;
    }

    /**
     * @return mixed
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param mixed $identifier
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }


}
