<?php

namespace FddCloud\bean\message\department;

use FddCloud\bean\message\MessageBase;

/**
 * 部门创建事件
 * 企业用户在组织管理创建部门，通过该事件回调给应用，事件ID: organization-dept-create
 *
 * 接收到事件后可以通过【查询部门详情】接口获取具体的部门详情
 */
class OrganizationDeptCreateMessage extends MessageBase
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