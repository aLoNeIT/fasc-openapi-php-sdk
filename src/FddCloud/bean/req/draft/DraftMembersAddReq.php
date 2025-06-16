<?php

namespace FddCloud\bean\req\draft;
class DraftMembersAddReq
{
    public $contractConsultId;
    public $openCorpId;
    public $memberIds;
    public $permission;

    /**
     * @return mixed
     */
    public function getContractConsultId()
    {
        return $this->contractConsultId;
    }

    /**
     * @param mixed $contractConsultId
     */
    public function setContractConsultId($contractConsultId)
    {
        $this->contractConsultId = $contractConsultId;
    }

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
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * @param mixed $permission
     */
    public function setPermission($permission)
    {
        $this->permission = $permission;
    }

}
