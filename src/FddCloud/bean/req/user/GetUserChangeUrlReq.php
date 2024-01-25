<?php
namespace FddCloud\bean\req\user;
class GetUserChangeUrlReq
{
    public $changeType;
    public $redirectUrl;

    /**
     * @return mixed
     */
    public function getChangeType()
    {
        return $this->changeType;
    }

    /**
     * @param mixed $changeType
     */
    public function setChangeType($changeType)
    {
        $this->changeType = $changeType;
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
