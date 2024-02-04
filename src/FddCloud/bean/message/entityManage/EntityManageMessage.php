<?php


namespace FddCloud\bean\message\entityManage;


use FddCloud\bean\message\MessageBase;

/**
 * 成员企业管理事件
 * 企业用户添加/删除了成员企业，或成员企业完成了授权，通过该事件回调给应用，事件ID: entity-manage
 */
class EntityManageMessage extends MessageBase
{
    public $openCorpId;
    public $entityId;
    public $clientCorpId;
    public $manageType;

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
    public function getEntityId()
    {
        return $this->entityId;
    }

    /**
     * @param mixed $entityId
     */
    public function setEntityId($entityId)
    {
        $this->entityId = $entityId;
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

    /**
     * @return mixed
     */
    public function getManageType()
    {
        return $this->manageType;
    }

    /**
     * @param mixed $manageType
     */
    public function setManageType($manageType)
    {
        $this->manageType = $manageType;
    }


}