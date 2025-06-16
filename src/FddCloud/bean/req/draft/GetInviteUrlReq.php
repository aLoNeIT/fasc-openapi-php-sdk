<?php

namespace FddCloud\bean\req\draft;
class GetInviteUrlReq
{
    public $contractConsultId;

    public $expireTime;

    public $innerPermission;

    public $outerPermission;

    public $touristView;

    public $redirectUrl;

    /**
     * @return mixed
     */
    public function getContractConsultId()
    {
        return $this->contractConsultId;
    }

    /**
     * @param mixed $contractConsultId
     */
    public function setContractConsultId($contractConsultId)
    {
        $this->contractConsultId = $contractConsultId;
    }

    /**
     * @return mixed
     */
    public function getExpireTime()
    {
        return $this->expireTime;
    }

    /**
     * @param mixed $expireTime
     */
    public function setExpireTime($expireTime)
    {
        $this->expireTime = $expireTime;
    }

    /**
     * @return mixed
     */
    public function getInnerPermission()
    {
        return $this->innerPermission;
    }

    /**
     * @param mixed $innerPermission
     */
    public function setInnerPermission($innerPermission)
    {
        $this->innerPermission = $innerPermission;
    }

    /**
     * @return mixed
     */
    public function getOuterPermission()
    {
        return $this->outerPermission;
    }

    /**
     * @param mixed $outerPermission
     */
    public function setOuterPermission($outerPermission)
    {
        $this->outerPermission = $outerPermission;
    }

    /**
     * @return mixed
     */
    public function getTouristView()
    {
        return $this->touristView;
    }

    /**
     * @param mixed $touristView
     */
    public function setTouristView($touristView)
    {
        $this->touristView = $touristView;
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
