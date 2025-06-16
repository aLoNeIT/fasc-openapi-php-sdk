<?php


namespace FddCloud\bean\req\ocr\edit;
class GetExamineDataReq
{
    public $initiator;
    public $examineId;

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
    public function getExamineId()
    {
        return $this->examineId;
    }

    /**
     * @param mixed $examineId
     */
    public function setExamineId($examineId)
    {
        $this->examineId = $examineId;
    }

}
