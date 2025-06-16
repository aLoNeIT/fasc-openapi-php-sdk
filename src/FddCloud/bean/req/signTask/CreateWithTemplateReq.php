<?php


namespace FddCloud\bean\req\signTask;

require_once 'CreateSignTaskBaseReq.php';


class CreateWithTemplateReq extends CreateSignTaskBaseReq
{
    public $signTemplateId;
    public $freeSignType;

    /**
     * @return mixed
     */
    public function getSignTemplateId()
    {
        return $this->signTemplateId;
    }

    /**
     * @param mixed $signTemplateId
     */
    public function setSignTemplateId($signTemplateId)
    {
        $this->signTemplateId = $signTemplateId;
    }

    /**
     * @return mixed
     */
    public function getFreeSignType()
    {
        return $this->freeSignType;
    }

    /**
     * @param mixed $freeSignType
     */
    public function setFreeSignType($freeSignType)
    {
        $this->freeSignType = $freeSignType;
    }


}