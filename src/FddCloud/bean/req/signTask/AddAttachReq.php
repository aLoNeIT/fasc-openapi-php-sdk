<?php


namespace FddCloud\bean\req\signTask;

class AddAttachReq extends SignTaskBaseReq
{
    public $attachs;

    /**
     * @return mixed
     */
    public function getAttachs()
    {
        return $this->attachs;
    }

    /**
     * @param mixed $attachs
     */
    public function setAttachs($attachs)
    {
        $this->attachs = $attachs;
    }


}