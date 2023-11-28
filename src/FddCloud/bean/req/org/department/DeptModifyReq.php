<?php


namespace FddCloud\bean\req\org\department;
class DeptModifyReq
{
    public $openCorpId;
    public $deptId;
    public $deptName;
    public $deptOrderNum;

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


}
