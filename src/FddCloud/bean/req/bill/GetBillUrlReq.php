<?php


namespace FddCloud\bean\req\bill;
class GetBillUrlReq
{
    public $clientUserId;
    public $openId;
    public $urlType;
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
    public function getOpenId()
    {
        return $this->openId;
    }

    /**
     * @param mixed $openId
     */
    public function setOpenId($openId)
    {
        $this->openId = $openId;
    }

    /**
     * @return mixed
     */
    public function getUrlType()
    {
        return $this->urlType;
    }

    /**
     * @param mixed $urlType
     */
    public function setUrlType($urlType)
    {
        $this->urlType = $urlType;
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
