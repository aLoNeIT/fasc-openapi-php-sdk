<?php

namespace FddCloud\bean\req\doc;
class OfdFileMergeReq
{
    public $fileId;
    public $insertFileId;
    public $mergeFileName;

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
    public function getInsertFileId()
    {
        return $this->insertFileId;
    }

    /**
     * @param mixed $insertFileId
     */
    public function setInsertFileId($insertFileId)
    {
        $this->insertFileId = $insertFileId;
    }

    /**
     * @return mixed
     */
    public function getMergeFileName()
    {
        return $this->mergeFileName;
    }

    /**
     * @param mixed $mergeFileName
     */
    public function setMergeFileName($mergeFileName)
    {
        $this->mergeFileName = $mergeFileName;
    }

}
