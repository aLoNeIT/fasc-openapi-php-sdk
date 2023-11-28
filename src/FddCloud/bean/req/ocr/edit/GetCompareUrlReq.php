<?php


namespace FddCloud\bean\req\ocr\edit;
class GetCompareUrlReq
{
    public $initiator;

    public $originFileId;

    public $targetFileId;

    /**
     * @return mixed
     */
    public function getInitiator()
    {
        return $this->initiator;
    }

    /**
     * @param mixed $initiator
     */
    public function setInitiator($initiator)
    {
        $this->initiator = $initiator;
    }

    /**
     * @return mixed
     */
    public function getOriginFileId()
    {
        return $this->originFileId;
    }

    /**
     * @param mixed $originFileId
     */
    public function setOriginFileId($originFileId)
    {
        $this->originFileId = $originFileId;
    }

    /**
     * @return mixed
     */
    public function getTargetFileId()
    {
        return $this->targetFileId;
    }

    /**
     * @param mixed $targetFileId
     */
    public function setTargetFileId($targetFileId)
    {
        $this->targetFileId = $targetFileId;
    }

}
