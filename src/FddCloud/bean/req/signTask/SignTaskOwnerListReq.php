<?php


namespace FddCloud\bean\req\signTask;
class SignTaskOwnerListReq
{
    public $ownerId;

    public $ownerRole;

    public $memberId;

    public $listFilter;

    public $listPageNo;

    public $listPageSize;

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
    public function getOwnerRole()
    {
        return $this->ownerRole;
    }

    /**
     * @param mixed $ownerRole
     */
    public function setOwnerRole($ownerRole)
    {
        $this->ownerRole = $ownerRole;
    }

    /**
     * @return mixed
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * @param mixed $memberId
     */
    public function setMemberId($memberId)
    {
        $this->memberId = $memberId;
    }


    /**
     * @return mixed
     */
    public function getListFilter()
    {
        return $this->listFilter;
    }

    /**
     * @param mixed $listFilter
     */
    public function setListFilter($listFilter)
    {
        $this->listFilter = $listFilter;
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
