<?php
namespace FddCloud\bean\message\draft;

use FddCloud\bean\message\MessageBase;

class DraftContractFinalizeMessage extends MessageBase
{
    public $contractConsultId;
    public $contractStatus;
    public $userName;
    public $menberId;
    public $corpName;
    public $openCorpid;

    /**
     * @return mixed
     */
    public function getContractConsultId()
    {
        return $this->contractConsultId;
    }

    /**
     * @param mixed $contractConsultId
     */
    public function setContractConsultId($contractConsultId)
    {
        $this->contractConsultId = $contractConsultId;
    }

    /**
     * @return mixed
     */
    public function getContractStatus()
    {
        return $this->contractStatus;
    }

    /**
     * @param mixed $contractStatus
     */
    public function setContractStatus($contractStatus)
    {
        $this->contractStatus = $contractStatus;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * @return mixed
     */
    public function getMenberId()
    {
        return $this->menberId;
    }

    /**
     * @param mixed $menberId
     */
    public function setMenberId($menberId)
    {
        $this->menberId = $menberId;
    }

    /**
     * @return mixed
     */
    public function getCorpName()
    {
        return $this->corpName;
    }

    /**
     * @param mixed $corpName
     */
    public function setCorpName($corpName)
    {
        $this->corpName = $corpName;
    }

    /**
     * @return mixed
     */
    public function getOpenCorpid()
    {
        return $this->openCorpid;
    }

    /**
     * @param mixed $openCorpid
     */
    public function setOpenCorpid($openCorpid)
    {
        $this->openCorpid = $openCorpid;
    }
}