<?php

namespace FddCloud\bean\req\corp;
class AppDevelopInfo
{
    public $createApp;
    public $appName;
    public $autocommit;
    public $feedbackUrl;

    /**
     * @return mixed
     */
    public function getCreateApp()
    {
        return $this->createApp;
    }

    /**
     * @param mixed $createApp
     */
    public function setCreateApp($createApp)
    {
        $this->createApp = $createApp;
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
    public function getAutocommit()
    {
        return $this->autocommit;
    }

    /**
     * @param mixed $autocommit
     */
    public function setAutocommit($autocommit)
    {
        $this->autocommit = $autocommit;
    }

    /**
     * @return mixed
     */
    public function getFeedbackUrl()
    {
        return $this->feedbackUrl;
    }

    /**
     * @param mixed $feedbackUrl
     */
    public function setFeedbackUrl($feedbackUrl)
    {
        $this->feedbackUrl = $feedbackUrl;
    }

}
