<?php

namespace FddCloud\bean\message\seal;
/**
 * 印章基本信息修改事件
 * 企业修改了印章的基本信息，通过该事件回调给应用，事件ID：seal-modify-info
 * 接收事件后可使用sealId通过【查询印章详情】获取详细信息。
 */
class SealModifyInfoMessage extends MessageBase
{
    public $openCorpId;
    public $sealId;
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
    public function getSealId()
    {
        return $this->sealId;
    }

    /**
     * @param mixed $sealId
     */
    public function setSealId($sealId)
    {
        $this->sealId = $sealId;
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
