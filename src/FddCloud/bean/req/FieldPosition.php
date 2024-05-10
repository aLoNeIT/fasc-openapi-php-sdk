<?php

namespace FddCloud\bean\req;
class FieldPosition
{
    public $positionMode;

    public $positionPageNo;

    public $positionX;

    public $positionY;

    public $positionKeyword;

    public $keywordOffsetX;

    public $keywordOffsetY;

    /**
     * @return mixed
     */
    public function getPositionMode()
    {
        return $this->positionMode;
    }

    /**
     * @param mixed $positionMode
     */
    public function setPositionMode($positionMode)
    {
        $this->positionMode = $positionMode;
    }

    /**
     * @return mixed
     */
    public function getPositionPageNo()
    {
        return $this->positionPageNo;
    }

    /**
     * @param mixed $positionPageNo
     */
    public function setPositionPageNo($positionPageNo)
    {
        $this->positionPageNo = $positionPageNo;
    }

    /**
     * @return mixed
     */
    public function getPositionX()
    {
        return $this->positionX;
    }

    /**
     * @param mixed $positionX
     */
    public function setPositionX($positionX)
    {
        $this->positionX = $positionX;
    }

    /**
     * @return mixed
     */
    public function getPositionY()
    {
        return $this->positionY;
    }

    /**
     * @param mixed $positionY
     */
    public function setPositionY($positionY)
    {
        $this->positionY = $positionY;
    }

    /**
     * @return mixed
     */
    public function getPositionKeyword()
    {
        return $this->positionKeyword;
    }

    /**
     * @param mixed $positionKeyword
     */
    public function setPositionKeyword($positionKeyword)
    {
        $this->positionKeyword = $positionKeyword;
    }

    /**
     * @return mixed
     */
    public function getKeywordOffsetX()
    {
        return $this->keywordOffsetX;
    }

    /**
     * @param mixed $keywordOffsetX
     */
    public function setKeywordOffsetX($keywordOffsetX)
    {
        $this->keywordOffsetX = $keywordOffsetX;
    }

    /**
     * @return mixed
     */
    public function getKeywordOffsetY()
    {
        return $this->keywordOffsetY;
    }

    /**
     * @param mixed $keywordOffsetY
     */
    public function setKeywordOffsetY($keywordOffsetY)
    {
        $this->keywordOffsetY = $keywordOffsetY;
    }

}
