<?php


namespace FddCloud\bean\req\signTask;
class SignTaskBaseReq
{
    public $signTaskId;

    public $redirectUrl;

    public $redirectMiniAppUrl;

    /**
     * @return mixed
     */
    public function getSignTaskId()
    {
        return $this->signTaskId;
    }

    /**
     * @param mixed $signTaskId
     */
    public function setSignTaskId($signTaskId)
    {
        $this->signTaskId = $signTaskId;
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
