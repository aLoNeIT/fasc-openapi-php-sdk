<?php
namespace FddCloud\bean\req\signTask;
class ModifyActor
{
    public $actorId;
    public $fillFields;
    public $signFields;
    public $signConfigInfo;

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
    public function getFillFields()
    {
        return $this->fillFields;
    }

    /**
     * @param mixed $fillFields
     */
    public function setFillFields($fillFields)
    {
        $this->fillFields = $fillFields;
    }

    /**
     * @return mixed
     */
    public function getSignFields()
    {
        return $this->signFields;
    }

    /**
     * @param mixed $signFields
     */
    public function setSignFields($signFields)
    {
        $this->signFields = $signFields;
    }

    /**
     * @return mixed
     */
    public function getSignConfigInfo()
    {
        return $this->signConfigInfo;
    }

    /**
     * @param mixed $signConfigInfo
     */
    public function setSignConfigInfo($signConfigInfo)
    {
        $this->signConfigInfo = $signConfigInfo;
    }


}
