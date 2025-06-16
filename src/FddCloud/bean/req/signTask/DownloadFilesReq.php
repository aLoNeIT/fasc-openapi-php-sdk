<?php


namespace FddCloud\bean\req\signTask;

class DownloadFilesReq extends SignTaskBaseReq
{

    public $ownerId;
    public $customName;
    public $compression;
    public $folderBySigntask;
    public $batchDownloadInfo = array();

    /**
     * @return mixed
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * @param mixed $ownerId
     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;
    }

    /**
     * @return mixed
     */
    public function getCustomName()
    {
        return $this->customName;
    }

    /**
     * @param mixed $customName
     */
    public function setCustomName($customName)
    {
        $this->customName = $customName;
    }

    /**
     * @return mixed
     */
    public function getCompression()
    {
        return $this->compression;
    }

    /**
     * @param mixed $compression
     */
    public function setCompression($compression)
    {
        $this->compression = $compression;
    }

    /**
     * @return mixed
     */
    public function getFolderBySigntask()
    {
        return $this->folderBySigntask;
    }

    /**
     * @param mixed $folderBySigntask
     */
    public function setFolderBySigntask($folderBySigntask)
    {
        $this->folderBySigntask = $folderBySigntask;
    }

    public function getBatchDownloadInfo(): array
    {
        return $this->batchDownloadInfo;
    }

    public function setBatchDownloadInfo(array $batchDownloadInfo)
    {
        $this->batchDownloadInfo = $batchDownloadInfo;
    }


}