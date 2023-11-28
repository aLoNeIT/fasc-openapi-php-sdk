<?php


namespace FddCloud\bean\req\org\member;

require_once "MemberBaseReq.php";

class MemberCreateReq extends MemberBaseReq
{
    public $employeeInfos;

    public $notifyActiveByEmail;

    /**
     * @return mixed
     */
    public function getEmployeeInfos()
    {
        return $this->employeeInfos;
    }

    /**
     * @param mixed $employeeInfos
     */
    public function setEmployeeInfos($employeeInfos)
    {
        $this->employeeInfos = $employeeInfos;
    }

    /**
     * @return mixed
     */
    public function getNotifyActiveByEmail()
    {
        return $this->notifyActiveByEmail;
    }

    /**
     * @param mixed $notifyActiveByEmail
     */
    public function setNotifyActiveByEmail($notifyActiveByEmail)
    {
        $this->notifyActiveByEmail = $notifyActiveByEmail;
    }


}
