<?php


namespace FddCloud\bean\req\corp;
class UpdateCorpReq
{
    public $openCorpId;

    public $clientCorpId;

    public $clientCorpName;

    /**
     * @return mixed
     */
    public function getOpenCorpId()
    {
        return $this->openCorpId;
    }

    /**
     * @param mixed $openCorpId
     */
    public function setOpenCorpId($openCorpId)
    {
        $this->openCorpId = $openCorpId;
    }

    /**
     * @return mixed
     */
    public function getClientCorpId()
    {
        return $this->clientCorpId;
    }

    /**
     * @param mixed $clientCorpId
     */
    public function setClientCorpId($clientCorpId)
    {
        $this->clientCorpId = $clientCorpId;
    }

    /**
     * @return mixed
     */
    public function getClientCorpName()
    {
        return $this->clientCorpName;
    }

    /**
     * @param mixed $clientCorpName
     */
    public function setClientCorpName($clientCorpName)
    {
        $this->clientCorpName = $clientCorpName;
    }


}
