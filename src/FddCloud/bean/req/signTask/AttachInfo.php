<?php
namespace FddCloud\bean\req\signTask;
class AttachInfo
{
    public $attachId;
    public $customAttachName;

    /**
     * @return mixed
     */
    public function getAttachId()
    {
        return $this->attachId;
    }

    /**
     * @param mixed $attachId
     */
    public function setAttachId($attachId)
    {
        $this->attachId = $attachId;
    }

    /**
     * @return mixed
     */
    public function getCustomAttachName()
    {
        return $this->customAttachName;
    }

    /**
     * @param mixed $customAttachName
     */
    public function setCustomAttachName($customAttachName)
    {
        $this->customAttachName = $customAttachName;
    }

}

