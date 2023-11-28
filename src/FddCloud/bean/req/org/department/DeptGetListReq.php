<?php


namespace FddCloud\bean\req\org\department;
class DeptGetListReq
{
    public $openCorpId;

    public $parentDeptId;

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


}
