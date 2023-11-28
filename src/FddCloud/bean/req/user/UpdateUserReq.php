<?php


namespace FddCloud\bean\req\user;
class UpdateUserReq
{
    public $openUserId;

    public $clientUserId;

    public $clientUserName;

    /**
     * @return mixed
     */
    public function getOpenUserId()
    {
        return $this->openUserId;
    }

    /**
     * @param mixed $openUserId
     */
    public function setOpenUserId($openUserId)
    {
        $this->openUserId = $openUserId;
    }

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
