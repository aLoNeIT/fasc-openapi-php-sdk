<?php


namespace FddCloud\bean\req\doc;
class FileGetUploadUrlReq
{
    public $fileType;

    /**
     * @return mixed
     */
    public function getFileType()
    {
        return $this->fileType;
    }

    /**
     * @param mixed $fileType
     */
    public function setFileType($fileType)
    {
        $this->fileType = $fileType;
    }


}
