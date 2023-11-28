<?php


namespace FddCloud\bean\req\signTask;

class ActorGetUrlReq extends SignTaskBaseReq
{
    public $actorId;

    public $clientUserId;

    public $redirectMiniAppUrl;

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
