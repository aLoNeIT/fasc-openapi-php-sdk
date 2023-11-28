<?php


namespace FddCloud\bean\req\signTask;

class AddActorsReq extends SignTaskBaseReq
{
    public $actors;

    /**
     * @return mixed
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * @param mixed $actors
     */
    public function setActors($actors)
    {
        $this->actors = $actors;
    }


}
