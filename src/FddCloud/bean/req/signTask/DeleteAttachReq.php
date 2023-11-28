<?php


namespace FddCloud\bean\req\signTask;

class DeleteAttachReq extends SignTaskBaseReq
{
    public $attachIds;

    /**
     * @return mixed
     */
    public function getAttachIds()
    {
        return $this->attachIds;
    }

    /**
     * @param mixed $attachIds
     */
    public function setAttachIds($attachIds)
    {
        $this->attachIds = $attachIds;
    }


}
