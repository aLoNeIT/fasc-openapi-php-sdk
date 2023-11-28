<?php


namespace FddCloud\bean\req\user;
/**
 * @author Fadada
 * 2021/9/8 16:09:38
 */
class AddUserReq
{

    public $clientUserId;

    public $clientUserName;


    /**
     * @return mixed
     */
    public function getClientUserId()
    {
        return $this->clientUserId;
    }

    /**
     * @param mixed $clientUserId
     */
    public function setClientUserId($clientUserId)
    {
        $this->clientUserId = $clientUserId;
    }

    /**
     * @return mixed
     */
    public function getClientUserName()
    {
        return $this->clientUserName;
    }

    /**
     * @param mixed $clientUserName
     */
    public function setClientUserName($clientUserName)
    {
        $this->clientUserName = $clientUserName;
    }


}