<?php


namespace FddCloud\bean\req\tool\ocr;
class IdCardOcrReq
{

    public $faceSide;

    public $nationalEmblemSide;


    /**
     * @return mixed
     */
    public function getFaceSide()
    {
        return $this->faceSide;
    }

    /**
     * @param mixed $faceSide
     */
    public function setFaceSide($faceSide)
    {
        $this->faceSide = $faceSide;
    }

    /**
     * @return mixed
     */
    public function getNationalEmblemSide()
    {
        return $this->nationalEmblemSide;
    }

    /**
     * @param mixed $nationalEmblemSide
     */
    public function setNationalEmblemSide($nationalEmblemSide)
    {
        $this->nationalEmblemSide = $nationalEmblemSide;
    }


}
