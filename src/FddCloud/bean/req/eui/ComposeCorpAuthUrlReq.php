<?php


namespace FddCloud\bean\req\eui;
class ComposeCorpAuthUrlReq
{
    public $clientCorpId;

    public $corpName;

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
    public function getCorpName()
    {
        return $this->corpName;
    }

    /**
     * @param mixed $corpName
     */
    public function setCorpName($corpName)
    {
        $this->corpName = $corpName;
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