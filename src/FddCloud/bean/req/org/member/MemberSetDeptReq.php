<?php


namespace FddCloud\bean\req\org\member;

require_once "MemberBaseReq.php";

class MemberSetDeptReq extends MemberBaseReq
{
    public $memberIds;

    public $memberDeptIds;

    public $model;

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

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }


}
