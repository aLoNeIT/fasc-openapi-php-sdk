<?php

namespace FddCloud\bean\req\archives;
class Attachment
{
    public $attachmentId;
    public $attachmentName;

    /**
     * @return mixed
     */
    public function getAttachmentId()
    {
        return $this->attachmentId;
    }

    /**
     * @param mixed $attachmentId
     */
    public function setAttachmentId($attachmentId)
    {
        $this->attachmentId = $attachmentId;
    }

    /**
     * @return mixed
     */
    public function getAttachmentName()
    {
        return $this->attachmentName;
    }

    /**
     * @param mixed $attachmentName
     */
    public function setAttachmentName($attachmentName)
    {
        $this->attachmentName = $attachmentName;
    }

}
