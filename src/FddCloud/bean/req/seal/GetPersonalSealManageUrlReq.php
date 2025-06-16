<?php

namespace FddCloud\bean\req\seal;
class GetPersonalSealManageUrlReq
{
    public $clientUserId;

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
