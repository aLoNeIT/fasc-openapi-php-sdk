<?php


namespace FddCloud\bean\req\user;
class GetUserAuthUrlReq
{
    public $clientUserId;
    public $accountName;
    public $unbindAccount;
    public $userIdentInfo;
    public $nonEditableInfo = array();
    public $authScopes = array();
    public $freeSignInfo;

    public $redirectUrl;
    public $redirectMiniAppUrl;


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
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * @param mixed $accountName
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;
    }

    /**
     * @return mixed
     */
    public function getUnbindAccount()
    {
        return $this->unbindAccount;
    }

    /**
     * @param mixed $unbindAccount
     */
    public function setUnbindAccount($unbindAccount)
    {
        $this->unbindAccount = $unbindAccount;
    }

    /**
     * @return mixed
     */
    public function getUserIdentInfo()
    {
        return $this->userIdentInfo;
    }

    /**
     * @param mixed $userIdentInfo
     */
    public function setUserIdentInfo($userIdentInfo)
    {
        $this->userIdentInfo = $userIdentInfo;
    }

    /**
     * @return array
     */
    public function getNonEditableInfo(): array
    {
        return $this->nonEditableInfo;
    }

    /**
     * @param array $nonEditableInfo
     */
    public function setNonEditableInfo(array $nonEditableInfo)
    {
        $this->nonEditableInfo = $nonEditableInfo;
    }

    /**
     * @return array
     */
    public function getAuthScopes(): array
    {
        return $this->authScopes;
    }

    /**
     * @param array $authScopes
     */
    public function setAuthScopes(array $authScopes)
    {
        $this->authScopes = $authScopes;
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
    public function getFreeSignInfo()
    {
        return $this->freeSignInfo;
    }

    /**
     * @param mixed $freeSignInfo
     */
    public function setFreeSignInfo($freeSignInfo)
    {
        $this->freeSignInfo = $freeSignInfo;
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



