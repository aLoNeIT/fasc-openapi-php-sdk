<?php
namespace FddCloud\bean\req\seal;
class CreateSealByTemplateReq
{
    public $openCorpId;
    public $entityId;

    public $sealName;

    public $categoryType;

    public $sealTag;

    public $sealTemplateStyle;

    public $sealSize;

    public $sealHorizontalText;

    public $sealBottomText;

    public $sealColor;

    public $createSerialNo;

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
    public function getSealHorizontalText()
    {
        return $this->sealHorizontalText;
    }

    /**
     * @param mixed $sealHorizontalText
     */
    public function setSealHorizontalText($sealHorizontalText) 
    {
        $this->sealHorizontalText = $sealHorizontalText;
    }

    /**
     * @return mixed
     */
    public function getSealBottomText()
    {
        return $this->sealBottomText;
    }

    /**
     * @param mixed $sealBottomText
     */
    public function setSealBottomText($sealBottomText) 
    {
        $this->sealBottomText = $sealBottomText;
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

    /**
     * @return mixed
     */
    public function getCreateSerialNo()
    {
        return $this->createSerialNo;
    }

    /**
     * @param mixed $createSerialNo
     */
    public function setCreateSerialNo($createSerialNo) 
    {
        $this->createSerialNo = $createSerialNo;
    }

}
