<?php


namespace FddCloud\bean\req\corp;
class GetCorpReq
{
    public $corpIdentNo;

    public $clientCorpId;

    public $openCorpId;

    /**
     * @return mixed
     */
    public function getCorpIdentNo()
    {
        return $this->corpIdentNo;
    }

    /**
     * @param mixed $corpIdentNo
     */
    public function setCorpIdentNo($corpIdentNo)
    {
        $this->corpIdentNo = $corpIdentNo;
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


}
