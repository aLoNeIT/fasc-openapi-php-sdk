<?php
namespace FddCloud\bean\req\signTask;

class AbolishedInitiator
{
    public $initiatorId;
    public $actorId;

    /**
     * @return mixed
     */
    public function getInitiatorId()
    {
        return $this->initiatorId;
    }

    /**
     * @param mixed $initiatorId
     */
    public function setInitiatorId($initiatorId)
    {
        $this->initiatorId = $initiatorId;
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

}
