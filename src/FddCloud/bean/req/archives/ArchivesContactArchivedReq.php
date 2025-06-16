<?php
namespace FddCloud\bean\req\archives;
class ArchivesContactArchivedReq
{
    public $openCorpId;
    public $contractType;
    public $contractNo;
    public $catalogId;
    public $signTaskId;
    public $fileId;
    public $memberId;
    public $attachments;

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
    public function getContractType()
    {
        return $this->contractType;
    }

    /**
     * @param mixed $contractType
     */
    public function setContractType($contractType)
    {
        $this->contractType = $contractType;
    }

    /**
     * @return mixed
     */
    public function getContractNo()
    {
        return $this->contractNo;
    }

    /**
     * @param mixed $contractNo
     */
    public function setContractNo($contractNo)
    {
        $this->contractNo = $contractNo;
    }

    /**
     * @return mixed
     */
    public function getCatalogId()
    {
        return $this->catalogId;
    }

    /**
     * @param mixed $catalogId
     */
    public function setCatalogId($catalogId)
    {
        $this->catalogId = $catalogId;
    }

    /**
     * @return mixed
     */
    public function getSignTaskId()
    {
        return $this->signTaskId;
    }

    /**
     * @param mixed $signTaskId
     */
    public function setSignTaskId($signTaskId)
    {
        $this->signTaskId = $signTaskId;
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
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @param mixed $attachments
     */
    public function setAttachments($attachments)
    {
        $this->attachments = $attachments;
    }
}
