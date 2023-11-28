<?php


namespace FddCloud\bean\req\corp;
class GetCorpAuthUrlReq
{
    public $clientCorpId;

    public $accountName;

    public $corpIdentInfo;

    public $corpNonEditableInfo;

    public $oprIdentInfo;

    public $authScopes;

    public $redirectUrl;

    /**
     * @return mixed
     */
    public function getClientCorpId()
    {
        return $this->clientCorpId;
    }

    /**
     * @param mixed $clientCorpId
     */
    public function setClientCorpId($clientCorpId)
    {
        $this->clientCorpId = $clientCorpId;
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
    public function getCorpIdentInfo()
    {
        return $this->corpIdentInfo;
    }

    /**
     * @param mixed $corpIdentInfo
     */
    public function setCorpIdentInfo($corpIdentInfo)
    {
        $this->corpIdentInfo = $corpIdentInfo;
    }

    /**
     * @return mixed
     */
    public function getCorpNonEditableInfo()
    {
        return $this->corpNonEditableInfo;
    }

    /**
     * @param mixed $corpNonEditableInfo
     */
    public function setCorpNonEditableInfo($corpNonEditableInfo)
    {
        $this->corpNonEditableInfo = $corpNonEditableInfo;
    }

    /**
     * @return mixed
     */
    public function getOprIdentInfo()
    {
        return $this->oprIdentInfo;
    }

    /**
     * @param mixed $oprIdentInfo
     */
    public function setOprIdentInfo($oprIdentInfo)
    {
        $this->oprIdentInfo = $oprIdentInfo;
    }

    /**
     * @return mixed
     */
    public function getAuthScopes()
    {
        return $this->authScopes;
    }

    /**
     * @param mixed $authScopes
     */
    public function setAuthScopes($authScopes)
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


}
