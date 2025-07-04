<?php

namespace FddCloud\bean\message\member;
use FddCloud\bean\message\MessageBase;

/**
 * 成员基本信息修改事件
 * 企业用户在组织管理修改成员基本信息，通过该事件回调给应用，事件ID: organization-member-modify-info
 *
 * 接收到事件后可以通过【查询成员详情】接口获取具体的成员详情
 */
class OrgMemberModifyInfoMessage extends MessageBase
{
    public $openCorpId;
    public $memberId;
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
