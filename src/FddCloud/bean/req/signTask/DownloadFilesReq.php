<?php


namespace FddCloud\bean\req\signTask;

class DownloadFilesReq extends SignTaskBaseReq
{

    public $ownerId;

    public $id;

    public $fileType;

    public $customName;

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
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

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


}