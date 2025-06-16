<?php

namespace FddCloud\bean\message\department;
use FddCloud\bean\message\MessageBase;

/**
 * 部门删除事件
 * 企业用户在组织管理删除部门，通过该事件回调给应用，事件ID: organization-dept-delete
 */
class OrganizationDeptDeleteMessage extends MessageBase
{
    public $openCorpId;
    public $deptId;
    public $clientCorpId;

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
    public function getClientCorpId()
    {
        return $this->clientCorpId;
    }

    /**
     * @param mixed $clientCorpId
     */
    public function setClientCorpId($clientCorpId)
    {
        $this->clientCorpId = $clientCorpId;
    }
}
