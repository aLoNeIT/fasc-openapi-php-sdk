<?php


namespace FddCloud\bean\req\seal;
class GetSealUserListReq
{
    public $ownerId;

    public $listFilter;

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


}