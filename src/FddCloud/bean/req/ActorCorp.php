<?php

namespace FddCloud\bean\req;

class ActorCorp
{
    public $actorCorpId;

    public $corpIdentInfo;

    public $corpInfoExtend;

    public $operatorId;

    public $operatorIdentInfo;

    public $operatorInfoExtend;

    /**
     * @return mixed
     */
    public function getActorCorpId()
    {
        return $this->actorCorpId;
    }

    /**
     * @param mixed $actorCorpId
     */
    public function setActorCorpId($actorCorpId)
    {
        $this->actorCorpId = $actorCorpId;
    }

    /**
     * @return mixed
     */
    public function getCorpIdentInfo()
    {
        return $this->corpIdentInfo;
    }

    /**
     * @param mixed $corpIdentInfo
     */
    public function setCorpIdentInfo($corpIdentInfo)
    {
        $this->corpIdentInfo = $corpIdentInfo;
    }

    /**
     * @return mixed
     */
    public function getCorpInfoExtend()
    {
        return $this->corpInfoExtend;
    }

    /**
     * @param mixed $corpInfoExtend
     */
    public function setCorpInfoExtend($corpInfoExtend)
    {
        $this->corpInfoExtend = $corpInfoExtend;
    }

    /**
     * @return mixed
     */
    public function getOperatorId()
    {
        return $this->operatorId;
    }

    /**
     * @param mixed $operatorId
     */
    public function setOperatorId($operatorId)
    {
        $this->operatorId = $operatorId;
    }

    /**
     * @return mixed
     */
    public function getOperatorIdentInfo()
    {
        return $this->operatorIdentInfo;
    }

    /**
     * @param mixed $operatorIdentInfo
     */
    public function setOperatorIdentInfo($operatorIdentInfo)
    {
        $this->operatorIdentInfo = $operatorIdentInfo;
    }

    /**
     * @return mixed
     */
    public function getOperatorInfoExtend()
    {
        return $this->operatorInfoExtend;
    }

    /**
     * @param mixed $operatorInfoExtend
     */
    public function setOperatorInfoExtend($operatorInfoExtend)
    {
        $this->operatorInfoExtend = $operatorInfoExtend;
    }


}