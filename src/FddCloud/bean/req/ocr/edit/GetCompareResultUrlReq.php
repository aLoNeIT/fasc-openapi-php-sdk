<?php


namespace FddCloud\bean\req\ocr\edit;
class GetCompareResultUrlReq
{
    public $initiator;

    public $compareId;

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
    public function getCompareId()
    {
        return $this->compareId;
    }

    /**
     * @param mixed $compareId
     */
    public function setCompareId($compareId)
    {
        $this->compareId = $compareId;
    }

}
