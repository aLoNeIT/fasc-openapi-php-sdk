<?php

namespace FddCloud\bean\req\corp;
class GetCorpConsoleUrlReq
{
    public $openCorpId;
    public $corpAuthInfo;
    public $clientUserId;
    public $modules;
    public $redirectUrl;
    public $jumpMethod;

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
    public function getModules()
    {
        return $this->modules;
    }

    /**
     * @param mixed $modules
     */
    public function setModules($modules)
    {
        $this->modules = $modules;
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
    public function getJumpMethod()
    {
        return $this->jumpMethod;
    }

    /**
     * @param mixed $jumpMethod
     */
    public function setJumpMethod($jumpMethod)
    {
        $this->jumpMethod = $jumpMethod;
    }

    /**
     * @return mixed
     */
    public function getCorpAuthInfo()
    {
        return $this->corpAuthInfo;
    }

    /**
     * @param mixed $corpAuthInfo
     */
    public function setCorpAuthInfo($corpAuthInfo)
    {
        $this->corpAuthInfo = $corpAuthInfo;
    }

}
