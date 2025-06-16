<?php
namespace FddCloud\bean\req\org\member;

class GetCorpAdminUrlReq
{
    public $openCorpId;
    public $clientUserId;
    public $manageType;
    public $adminAddInfos;
    public $adminDeleteInfos;
    public $redirectUrl;

    /**
     * @return mixed
     */
    public function getOpenCorpId()
    {
        return $this->openCorpId;
    }

    /**
     * @param mixed $openCorpId
     */
    public function setOpenCorpId($openCorpId)
    {
        $this->openCorpId = $openCorpId;
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
    public function getManageType()
    {
        return $this->manageType;
    }

    /**
     * @param mixed $manageType
     */
    public function setManageType($manageType)
    {
        $this->manageType = $manageType;
    }

    /**
     * @return mixed
     */
    public function getAdminAddInfos()
    {
        return $this->adminAddInfos;
    }

    /**
     * @param mixed $adminAddInfos
     */
    public function setAdminAddInfos($adminAddInfos)
    {
        $this->adminAddInfos = $adminAddInfos;
    }

    /**
     * @return mixed
     */
    public function getAdminDeleteInfos()
    {
        return $this->adminDeleteInfos;
    }

    /**
     * @param mixed $adminDeleteInfos
     */
    public function setAdminDeleteInfos($adminDeleteInfos)
    {
        $this->adminDeleteInfos = $adminDeleteInfos;
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
