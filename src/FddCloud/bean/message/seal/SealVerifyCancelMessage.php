<?php

namespace FddCloud\bean\message\seal;
use FddCloud\bean\message\MessageBase;

/**
 * 印章审核撤销事件
 * 企业撤销了审核中的印章，通过该事件回调给应用，事件ID：seal-verify-cancel
 */
class SealVerifyCancelMessage extends MessageBase
{
    public $openCorpId;
    public $verifyId;
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
    public function getVerifyId()
    {
        return $this->verifyId;
    }

    /**
     * @param mixed $verifyId
     */
    public function setVerifyId($verifyId)
    {
        $this->verifyId = $verifyId;
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
