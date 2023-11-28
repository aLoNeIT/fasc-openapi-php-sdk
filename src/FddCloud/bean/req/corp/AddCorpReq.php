<?php


namespace FddCloud\bean\req\corp;
class AddCorpReq
{

    public $clientCorpId;

    public $clientCorpName;

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
