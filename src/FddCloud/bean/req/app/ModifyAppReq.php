<?php

namespace FddCloud\bean\req\app ;

class ModifyAppReq
{
    public $queriedAppId;
    public $appName;
    public $appSlogan;
    public $appDescription;
    public $ipWhitelist;
    public $callbackUrl;
    public $iframeWhitelist;

    /**
     * @return mixed
     */
    public function getQueriedAppId()
    {
        return $this->queriedAppId;
    }

    /**
     * @param mixed $queriedAppId
     */
    public function setQueriedAppId($queriedAppId)
    {
        $this->queriedAppId = $queriedAppId;
    }

    /**
     * @return mixed
     */
    public function getAppName()
    {
        return $this->appName;
    }

    /**
     * @param mixed $appName
     */
    public function setAppName($appName)
    {
        $this->appName = $appName;
    }

    /**
     * @return mixed
     */
    public function getAppSlogan()
    {
        return $this->appSlogan;
    }

    /**
     * @param mixed $appSlogan
     */
    public function setAppSlogan($appSlogan)
    {
        $this->appSlogan = $appSlogan;
    }

    /**
     * @return mixed
     */
    public function getAppDescription()
    {
        return $this->appDescription;
    }

    /**
     * @param mixed $appDescription
     */
    public function setAppDescription($appDescription)
    {
        $this->appDescription = $appDescription;
    }

    /**
     * @return mixed
     */
    public function getIpWhitelist()
    {
        return $this->ipWhitelist;
    }

    /**
     * @param mixed $ipWhitelist
     */
    public function setIpWhitelist($ipWhitelist)
    {
        $this->ipWhitelist = $ipWhitelist;
    }

    /**
     * @return mixed
     */
    public function getCallbackUrl()
    {
        return $this->callbackUrl;
    }

    /**
     * @param mixed $callbackUrl
     */
    public function setCallbackUrl($callbackUrl)
    {
        $this->callbackUrl = $callbackUrl;
    }

    /**
     * @return mixed
     */
    public function getIframeWhitelist()
    {
        return $this->iframeWhitelist;
    }

    /**
     * @param mixed $iframeWhitelist
     */
    public function setIframeWhitelist($iframeWhitelist)
    {
        $this->iframeWhitelist = $iframeWhitelist;
    }


}