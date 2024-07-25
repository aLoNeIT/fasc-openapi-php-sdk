<?php
namespace FddCloud\bean\req\seal;
class CreateSealByImageReq extends SealBaseReq
{
    public $openCorpId;
    public $entityId;

    public $sealName;

    public $categoryType;

    public $sealImage;

    public $sealTag;

    public $sealWidth;

    public $sealHeight;

    public $sealOldStyle;

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
    public function getCategoryType()
    {
        return $this->categoryType;
    }

    /**
     * @param mixed $categoryType
     */
    public function setCategoryType($categoryType) 
    {
        $this->categoryType = $categoryType;
    }

    /**
     * @return mixed
     */
    public function getSealImage()
    {
        return $this->sealImage;
    }

    /**
     * @param mixed $sealImage
     */
    public function setSealImage($sealImage) 
    {
        $this->sealImage = $sealImage;
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
    public function getSealWidth()
    {
        return $this->sealWidth;
    }

    /**
     * @param mixed $sealWidth
     */
    public function setSealWidth($sealWidth) 
    {
        $this->sealWidth = $sealWidth;
    }

    /**
     * @return mixed
     */
    public function getSealHeight()
    {
        return $this->sealHeight;
    }

    /**
     * @param mixed $sealHeight
     */
    public function setSealHeight($sealHeight) 
    {
        $this->sealHeight = $sealHeight;
    }

    /**
     * @return mixed
     */
    public function getSealOldStyle()
    {
        return $this->sealOldStyle;
    }

    /**
     * @param mixed $sealOldStyle
     */
    public function setSealOldStyle($sealOldStyle) 
    {
        $this->sealOldStyle = $sealOldStyle;
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
