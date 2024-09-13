<?php

namespace FddCloud\bean\req\seal;
class GetFreeSignToTemplateUrlReq
{
    public $openCorpId;

    public $clientUserId;

    public $sealIds;

    public $templateIds;

    public $email;

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
    public function getTemplateIds()
    {
        return $this->templateIds;
    }

    /**
     * @param mixed $templateIds
     */
    public function setTemplateIds($templateIds)
    {
        $this->templateIds = $templateIds;
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
