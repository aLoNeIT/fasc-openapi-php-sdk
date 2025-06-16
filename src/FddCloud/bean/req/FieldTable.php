<?php

namespace FddCloud\bean\req;

class FieldTable
{
    public $required;
    public $header;
    public $requiredCount;
    public $fontType;
    public $fontSize;
    public $alignment;
    public $headerPosition;
    public $rows;
    public $cols;
    public $rowHeight;
    public $widths;
    public $dynamicFilling;
    public $defaultValue;
    public $hideHeader;

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

    /**
     * @return mixed
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param mixed $header
     */
    public function setHeader($header)
    {
        $this->header = $header;
    }

    /**
     * @return mixed
     */
    public function getRequiredCount()
    {
        return $this->requiredCount;
    }

    /**
     * @param mixed $requiredCount
     */
    public function setRequiredCount($requiredCount)
    {
        $this->requiredCount = $requiredCount;
    }

    /**
     * @return mixed
     */
    public function getFontType()
    {
        return $this->fontType;
    }

    /**
     * @param mixed $fontType
     */
    public function setFontType($fontType)
    {
        $this->fontType = $fontType;
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
    public function getAlignment()
    {
        return $this->alignment;
    }

    /**
     * @param mixed $alignment
     */
    public function setAlignment($alignment)
    {
        $this->alignment = $alignment;
    }

    /**
     * @return mixed
     */
    public function getHeaderPosition()
    {
        return $this->headerPosition;
    }

    /**
     * @param mixed $headerPosition
     */
    public function setHeaderPosition($headerPosition)
    {
        $this->headerPosition = $headerPosition;
    }

    /**
     * @return mixed
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * @param mixed $rows
     */
    public function setRows($rows)
    {
        $this->rows = $rows;
    }

    /**
     * @return mixed
     */
    public function getCols()
    {
        return $this->cols;
    }

    /**
     * @param mixed $cols
     */
    public function setCols($cols)
    {
        $this->cols = $cols;
    }

    /**
     * @return mixed
     */
    public function getRowHeight()
    {
        return $this->rowHeight;
    }

    /**
     * @param mixed $rowHeight
     */
    public function setRowHeight($rowHeight)
    {
        $this->rowHeight = $rowHeight;
    }

    /**
     * @return mixed
     */
    public function getWidths()
    {
        return $this->widths;
    }

    /**
     * @param mixed $widths
     */
    public function setWidths($widths)
    {
        $this->widths = $widths;
    }

    /**
     * @return mixed
     */
    public function getDynamicFilling()
    {
        return $this->dynamicFilling;
    }

    /**
     * @param mixed $dynamicFilling
     */
    public function setDynamicFilling($dynamicFilling)
    {
        $this->dynamicFilling = $dynamicFilling;
    }

    /**
     * @return mixed
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * @param mixed $defaultValue
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;
    }

    /**
     * @return mixed
     */
    public function getHideHeader()
    {
        return $this->hideHeader;
    }

    /**
     * @param mixed $hideHeader
     */
    public function setHideHeader($hideHeader)
    {
        $this->hideHeader = $hideHeader;
    }

}