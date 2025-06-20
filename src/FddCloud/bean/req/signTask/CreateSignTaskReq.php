<?php


namespace FddCloud\bean\req\signTask;

class CreateSignTaskReq extends CreateSignTaskBaseReq
{
    public $signInOrder;
    public $fileFormat;
    public $isAllowInsertFile;
    public $docs;
    public $attachs;

    /**
     * @return mixed
     */
    public function getSignInOrder()
    {
        return $this->signInOrder;
    }

    /**
     * @param mixed $signInOrder
     */
    public function setSignInOrder($signInOrder)
    {
        $this->signInOrder = $signInOrder;
    }

    /**
     * @return mixed
     */
    public function getFileFormat()
    {
        return $this->fileFormat;
    }

    /**
     * @param mixed $fileFormat
     */
    public function setFileFormat($fileFormat)
    {
        $this->fileFormat = $fileFormat;
    }

    /**
     * @return mixed
     */
    public function getIsAllowInsertFile()
    {
        return $this->isAllowInsertFile;
    }

    /**
     * @param mixed $isAllowInsertFile
     */
    public function setIsAllowInsertFile($isAllowInsertFile)
    {
        $this->isAllowInsertFile = $isAllowInsertFile;
    }

    /**
     * @return mixed
     */
    public function getDocs()
    {
        return $this->docs;
    }

    /**
     * @param mixed $docs
     */
    public function setDocs($docs)
    {
        $this->docs = $docs;
    }

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
