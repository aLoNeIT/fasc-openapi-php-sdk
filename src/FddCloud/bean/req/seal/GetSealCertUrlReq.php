<?php
namespace FddCloud\bean\req\seal;
class GetSealCertUrlReq
{
    public $ownerId;
    public $sealId;
    public $clientUserId;
    public $redirectUrl;
    public $redirectMiniAppUrl;

    /**
     * @return mixed
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * @param mixed $ownerId
     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;
    }

    /**
     * @return mixed
     */
    public function getSealId()
    {
        return $this->sealId;
    }

    /**
     * @param mixed $sealId
     */
    public function setSealId($sealId)
    {
        $this->sealId = $sealId;
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

    /**
     * @return mixed
     */
    public function getRedirectMiniAppUrl()
    {
        return $this->redirectMiniAppUrl;
    }

    /**
     * @param mixed $redirectMiniAppUrl
     */
    public function setRedirectMiniAppUrl($redirectMiniAppUrl)
    {
        $this->redirectMiniAppUrl = $redirectMiniAppUrl;
    }


}
