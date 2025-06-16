<?php


namespace FddCloud\bean\req\doc;
class FddFileUrl
{
    public $fileType;

    public $fddFileUrl;

    public $fileName;

    public $fileFormat;

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

    /**
     * @return mixed
     */
    public function getFddFileUrl()
    {
        return $this->fddFileUrl;
    }

    /**
     * @param mixed $fddFileUrl
     */
    public function setFddFileUrl($fddFileUrl)
    {
        $this->fddFileUrl = $fddFileUrl;
    }

    /**
     * @return mixed
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param mixed $fileName
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
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


}
