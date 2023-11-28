<?php

namespace FddCloud\bean\message\seal;
/**
 * 印章授权成员事件
 * 企业将印章授权至成员，通过该事件回调给应用，事件ID：seal-authorize-member
 */
class SealAuthorizeMemberMessage extends MessageBase
{
    public $openCorpId;
    public $sealIds;
    public $memberIds;
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
    public function getSealIds()
    {
        return $this->sealIds;
    }

    /**
     * @param mixed $sealIds
     */
    public function setSealIds($sealIds)
    {
        $this->sealIds = $sealIds;
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
