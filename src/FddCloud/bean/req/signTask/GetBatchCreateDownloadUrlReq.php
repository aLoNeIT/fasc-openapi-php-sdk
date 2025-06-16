<?php
namespace FddCloud\bean\req\signTask;
class GetBatchCreateDownloadUrlReq
{
    public $ownerId;
    public $signTemplateId;

    /**
     * @return mixed
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * @param mixed $ownerId
     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;
    }

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


}
