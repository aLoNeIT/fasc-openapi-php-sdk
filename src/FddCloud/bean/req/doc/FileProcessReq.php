<?php


namespace FddCloud\bean\req\doc;
class FileProcessReq
{
    public $fddFileUrlList;
    public $storageType;
    public $separation;

    /**
     * @return mixed
     */
    public function getFddFileUrlList()
    {
        return $this->fddFileUrlList;
    }

    /**
     * @param mixed $fddFileUrlList
     */
    public function setFddFileUrlList($fddFileUrlList)
    {
        $this->fddFileUrlList = $fddFileUrlList;
    }

    /**
     * @return mixed
     */
    public function getStorageType()
    {
        return $this->storageType;
    }

    /**
     * @param mixed $storageType
     */
    public function setStorageType($storageType)
    {
        $this->storageType = $storageType;
    }

    /**
     * @return mixed
     */
    public function getSeparation()
    {
        return $this->separation;
    }

    /**
     * @param mixed $separation
     */
    public function setSeparation($separation)
    {
        $this->separation = $separation;
    }



}
