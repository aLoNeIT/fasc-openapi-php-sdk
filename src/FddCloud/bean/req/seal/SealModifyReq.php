<?php
namespace FddCloud\bean\req\seal;
class SealModifyReq
{
    public $openCorpId;

    public $sealId;

    public $sealName;

    public $sealTag;

    /**
     * @return mixed
     */
    public function getOpenCorpId()
    {
        return $this->openCorpId;
    }

    /**
     * @param mixed $openCorpId
     */
    public function setOpenCorpId($openCorpId)
    {
        $this->openCorpId = $openCorpId;
    }

    /**
     * @return mixed
     */
    public function getSealId()
    {
        return $this->sealId;
    }

    /**
     * @param mixed $sealId
     */
    public function setSealId($sealId)
    {
        $this->sealId = $sealId;
    }

    /**
     * @return mixed
     */
    public function getSealName()
    {
        return $this->sealName;
    }

    /**
     * @param mixed $sealName
     */
    public function setSealName($sealName)
    {
        $this->sealName = $sealName;
    }

    /**
     * @return mixed
     */
    public function getSealTag()
    {
        return $this->sealTag;
    }

    /**
     * @param mixed $sealTag
     */
    public function setSealTag($sealTag)
    {
        $this->sealTag = $sealTag;
    }


}
