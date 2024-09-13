<?php
namespace FddCloud\bean\req\corp;
class CorpAuthInfo
{
    public $clientCorpId;
    public $corpIdentInfo;

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
    public function getCorpIdentInfo()
    {
        return $this->corpIdentInfo;
    }

    /**
     * @param mixed $corpIdentInfo
     */
    public function setCorpIdentInfo($corpIdentInfo)
    {
        $this->corpIdentInfo = $corpIdentInfo;
    }

}
