<?php

namespace FddCloud\bean\req\app ;

class GetAppOpenIdListReq
{
    public $idType;
    public $owner;
    public $availableStatus;
    public $listPageNo;
    public $listPageSize;

    /**
     * @return mixed
     */
    public function getIdType()
    {
        return $this->idType;
    }

    /**
     * @param mixed $idType
     */
    public function setIdType($idType)
    {
        $this->idType = $idType;
    }

    /**
     * @return mixed
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param mixed $owner
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }

    /**
     * @return mixed
     */
    public function getAvailableStatus()
    {
        return $this->availableStatus;
    }

    /**
     * @param mixed $availableStatus
     */
    public function setAvailableStatus($availableStatus)
    {
        $this->availableStatus = $availableStatus;
    }

    /**
     * @return mixed
     */
    public function getListPageNo()
    {
        return $this->listPageNo;
    }

    /**
     * @param mixed $listPageNo
     */
    public function setListPageNo($listPageNo)
    {
        $this->listPageNo = $listPageNo;
    }

    /**
     * @return mixed
     */
    public function getListPageSize()
    {
        return $this->listPageSize;
    }

    /**
     * @param mixed $listPageSize
     */
    public function setListPageSize($listPageSize)
    {
        $this->listPageSize = $listPageSize;
    }


}
