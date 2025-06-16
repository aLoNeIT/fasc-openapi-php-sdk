<?php

namespace FddCloud\bean\req;

class ActorUser
{
    public $actorUserId;

    public $userIdentInfo;

    public $userInfoExtend;

    /**
     * @return mixed
     */
    public function getActorUserId()
    {
        return $this->actorUserId;
    }

    /**
     * @param mixed $actorUserId
     */
    public function setActorUserId($actorUserId)
    {
        $this->actorUserId = $actorUserId;
    }

    /**
     * @return mixed
     */
    public function getUserIdentInfo()
    {
        return $this->userIdentInfo;
    }

    /**
     * @param mixed $userIdentInfo
     */
    public function setUserIdentInfo($userIdentInfo)
    {
        $this->userIdentInfo = $userIdentInfo;
    }

    /**
     * @return mixed
     */
    public function getUserInfoExtend()
    {
        return $this->userInfoExtend;
    }

    /**
     * @param mixed $userInfoExtend
     */
    public function setUserInfoExtend($userInfoExtend)
    {
        $this->userInfoExtend = $userInfoExtend;
    }


}