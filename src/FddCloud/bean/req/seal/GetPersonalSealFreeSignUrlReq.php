<?php


namespace FddCloud\bean\req\seal;
class GetPersonalSealFreeSignUrlReq
{
    public $openUserId;

    public $sealIds;

    public $businessId;

    public $email;

    public $expiresTime;

    public $redirectUrl;

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
    public function getSealIds()
    {
        return $this->sealIds;
    }

    /**
     * @param mixed $sealIds
     */
    public function setSealIds($sealIds)
    {
        $this->sealIds = $sealIds;
    }

    /**
     * @return mixed
     */
    public function getBusinessId()
    {
        return $this->businessId;
    }

    /**
     * @param mixed $businessId
     */
    public function setBusinessId($businessId)
    {
        $this->businessId = $businessId;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getExpiresTime()
    {
        return $this->expiresTime;
    }

    /**
     * @param mixed $expiresTime
     */
    public function setExpiresTime($expiresTime)
    {
        $this->expiresTime = $expiresTime;
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
