<?php

namespace FddCloud\bean\req\signTask;
class GetActorCerInfoReq extends SignTaskBaseReq
{
    public $actorId;

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

}
