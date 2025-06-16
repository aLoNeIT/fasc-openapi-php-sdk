<?php
namespace FddCloud\bean\req\seal;
class CreateLegalRepresentativeSealByTemplateReq extends SealBaseReq
{
    public $openCorpId;
    public $entityId;
    public $openUserId;
    public $sealName;
    public $sealTag;
    public $sealTemplateStyle;
    public $sealSize;
    public $sealSuffix;
    public $securityCode;
    public $sealColor;

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
    public function getEntityId()
    {
        return $this->entityId;
    }

    /**
     * @param mixed $entityId
     */
    public function setEntityId($entityId)
    {
        $this->entityId = $entityId;
    }

    /**
     * @return mixed
     */
    public function getOpenUserId()
    {
        return $this->openUserId;
    }

    /**
     * @param mixed $openUserId
     */
    public function setOpenUserId($openUserId) 
    {
        $this->openUserId = $openUserId;
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

    /**
     * @return mixed
     */
    public function getSealTemplateStyle()
    {
        return $this->sealTemplateStyle;
    }

    /**
     * @param mixed $sealTemplateStyle
     */
    public function setSealTemplateStyle($sealTemplateStyle) 
    {
        $this->sealTemplateStyle = $sealTemplateStyle;
    }

    /**
     * @return mixed
     */
    public function getSealSize()
    {
        return $this->sealSize;
    }

    /**
     * @param mixed $sealSize
     */
    public function setSealSize($sealSize) 
    {
        $this->sealSize = $sealSize;
    }

    /**
     * @return mixed
     */
    public function getSealSuffix()
    {
        return $this->sealSuffix;
    }

    /**
     * @param mixed $sealSuffix
     */
    public function setSealSuffix($sealSuffix) 
    {
        $this->sealSuffix = $sealSuffix;
    }

    /**
     * @return mixed
     */
    public function getSecurityCode()
    {
        return $this->securityCode;
    }

    /**
     * @param mixed $securityCode
     */
    public function setSecurityCode($securityCode) 
    {
        $this->securityCode = $securityCode;
    }

    /**
     * @return mixed
     */
    public function getSealColor()
    {
        return $this->sealColor;
    }

    /**
     * @param mixed $sealColor
     */
    public function setSealColor($sealColor) 
    {
        $this->sealColor = $sealColor;
    }


}
