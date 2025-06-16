<?php

namespace FddCloud\bean\req\seal;
class GetPersonalSealCreateUrlReq
{
    public $clientUserId;

    public $createSerialNo;

    public $createMethod;

    public $redirectUrl;

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
    public function getCreateSerialNo()
    {
        return $this->createSerialNo;
    }

    /**
     * @param mixed $createSerialNo
     */
    public function setCreateSerialNo($createSerialNo) 
    {
        $this->createSerialNo = $createSerialNo;
    }

    /**
     * @return mixed
     */
    public function getCreateMethod()
    {
        return $this->createMethod;
    }

    /**
     * @param mixed $createMethod
     */
    public function setCreateMethod($createMethod)
    {
        $this->createMethod = $createMethod;
    }

    /**
     * @return mixed
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * @param mixed $redirectUrl
     */
    public function setRedirectUrl($redirectUrl) 
    {
        $this->redirectUrl = $redirectUrl;
    }


}
