<?php
namespace FddCloud\bean\req\collect;
class GetSmartformCollectUrlReq
{
    public $openCorpId;
    public $formId;
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
    public function getFormId()
    {
        return $this->formId;
    }

    /**
     * @param mixed $formId
     */
    public function setFormId($formId)
    {
        $this->formId = $formId;
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