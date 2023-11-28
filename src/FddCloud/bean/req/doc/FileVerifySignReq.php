<?php


namespace FddCloud\bean\req\doc;
class FileVerifySignReq
{
    public $fileId;

    public $fileHash;

    /**
     * @return mixed
     */
    public function getFileId()
    {
        return $this->fileId;
    }

    /**
     * @param mixed $fileId
     */
    public function setFileId($fileId)
    {
        $this->fileId = $fileId;
    }

    /**
     * @return mixed
     */
    public function getFileHash()
    {
        return $this->fileHash;
    }

    /**
     * @param mixed $fileHash
     */
    public function setFileHash($fileHash)
    {
        $this->fileHash = $fileHash;
    }

}
