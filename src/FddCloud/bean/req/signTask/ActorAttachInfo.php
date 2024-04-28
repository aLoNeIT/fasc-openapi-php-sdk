<?php

namespace FddCloud\bean\req\signTask;
class ActorAttachInfo
{
    public $actorAttachName;
    public $required;

    /**
     * @return mixed
     */
    public function getActorAttachName()
    {
        return $this->actorAttachName;
    }

    /**
     * @param mixed $actorAttachName
     */
    public function setActorAttachName($actorAttachName)
    {
        $this->actorAttachName = $actorAttachName;
    }

    /**
     * @return mixed
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * @param mixed $required
     */
    public function setRequired($required)
    {
        $this->required = $required;
    }


}
