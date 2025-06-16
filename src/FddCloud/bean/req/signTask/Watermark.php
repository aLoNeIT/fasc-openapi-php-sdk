<?php
namespace FddCloud\bean\req\signTask;

class Watermark
{
    public $type;
    public $content;
    public $fontSize;
    public $fontColor;
    public $picBase64;
    public $picWidth;
    public $picHeight;
    public $rotation;
    public $transparency;
    public $position;
    public $density;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getFontSize()
    {
        return $this->fontSize;
    }

    /**
     * @param mixed $fontSize
     */
    public function setFontSize($fontSize)
    {
        $this->fontSize = $fontSize;
    }

    /**
     * @return mixed
     */
    public function getFontColor()
    {
        return $this->fontColor;
    }

    /**
     * @param mixed $fontColor
     */
    public function setFontColor($fontColor)
    {
        $this->fontColor = $fontColor;
    }

    /**
     * @return mixed
     */
    public function getPicBase64()
    {
        return $this->picBase64;
    }

    /**
     * @param mixed $picBase64
     */
    public function setPicBase64($picBase64)
    {
        $this->picBase64 = $picBase64;
    }

    /**
     * @return mixed
     */
    public function getPicWidth()
    {
        return $this->picWidth;
    }

    /**
     * @param mixed $picWidth
     */
    public function setPicWidth($picWidth)
    {
        $this->picWidth = $picWidth;
    }

    /**
     * @return mixed
     */
    public function getPicHeight()
    {
        return $this->picHeight;
    }

    /**
     * @param mixed $picHeight
     */
    public function setPicHeight($picHeight)
    {
        $this->picHeight = $picHeight;
    }

    /**
     * @return mixed
     */
    public function getRotation()
    {
        return $this->rotation;
    }

    /**
     * @param mixed $rotation
     */
    public function setRotation($rotation)
    {
        $this->rotation = $rotation;
    }

    /**
     * @return mixed
     */
    public function getTransparency()
    {
        return $this->transparency;
    }

    /**
     * @param mixed $transparency
     */
    public function setTransparency($transparency)
    {
        $this->transparency = $transparency;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    public function getDensity()
    {
        return $this->density;
    }

    /**
     * @param mixed $density
     */
    public function setDensity($density)
    {
        $this->density = $density;
    }

}