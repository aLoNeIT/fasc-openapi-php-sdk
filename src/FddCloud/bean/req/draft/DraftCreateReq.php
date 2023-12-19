<?php

namespace FddCloud\bean\req\draft;
class DraftCreateReq
{
    public $openCorpId;
    public $initiatorMemberId;
    public $contractSubject;
    public $fileId;

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
    public function getInitiatorMemberId()
    {
        return $this->initiatorMemberId;
    }

    /**
     * @param mixed $initiatorMemberId
     */
    public function setInitiatorMemberId($initiatorMemberId)
    {
        $this->initiatorMemberId = $initiatorMemberId;
    }

    /**
     * @return mixed
     */
    public function getContractSubject()
    {
        return $this->contractSubject;
    }

    /**
     * @param mixed $contractSubject
     */
    public function setContractSubject($contractSubject)
    {
        $this->contractSubject = $contractSubject;
    }

    /**
     * @return mixed
     */
    public function getFileId()
    {
        return $this->fileId;
    }

    /**
     * @param mixed $fileId
     */
    public function setFileId($fileId)
    {
        $this->fileId = $fileId;
    }

}
