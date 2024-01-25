<?php
namespace FddCloud\bean\req\draft;

class ListFilter
{
    public $contractSubject;
    public $contractStatus;

    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getContractSubject()
    {
        return $this->contractSubject;
    }

    /**
     * @param mixed $contractSubject
     */
    public function setContractSubject($contractSubject)
    {
        $this->contractSubject = $contractSubject;
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

}
