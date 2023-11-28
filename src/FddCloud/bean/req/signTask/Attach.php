<?php


namespace FddCloud\bean\req\signTask;
class Attach
{
    public $attachId;

    public $attachName;

    public $attachFileId;

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
    public function getAttachName()
    {
        return $this->attachName;
    }

    /**
     * @param mixed $attachName
     */
    public function setAttachName($attachName)
    {
        $this->attachName = $attachName;
    }

    /**
     * @return mixed
     */
    public function getAttachFileId()
    {
        return $this->attachFileId;
    }

    /**
     * @param mixed $attachFileId
     */
    public function setAttachFileId($attachFileId)
    {
        $this->attachFileId = $attachFileId;
    }


}
