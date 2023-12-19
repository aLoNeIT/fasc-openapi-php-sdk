<?php
namespace FddCloud\bean\req\seal;
class CreatePersonalSealByTemplateReq extends SealBaseReq
{
    public $openUserId;
    public $sealName;
    public $sealTemplateStyle;
    public $sealSize;
    public $sealSuffix;
    public $sealColor;

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
