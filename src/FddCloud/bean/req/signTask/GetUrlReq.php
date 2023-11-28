<?php


namespace FddCloud\bean\req\signTask;

class GetUrlReq extends SignTaskBaseReq
{
    public $actorType;

    public $actorId;

    public $redirectUrl;

    /**
     * @return mixed
     */
    public function getActorType()
    {
        return $this->actorType;
    }

    /**
     * @param mixed $actorType
     */
    public function setActorType($actorType)
    {
        $this->actorType = $actorType;
    }

    /**
     * @return mixed
     */
    public function getActorId()
    {
        return $this->actorId;
    }

    /**
     * @param mixed $actorId
     */
    public function setActorId($actorId)
    {
        $this->actorId = $actorId;
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
