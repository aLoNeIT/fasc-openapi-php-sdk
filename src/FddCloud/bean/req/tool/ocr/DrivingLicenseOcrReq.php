<?php


namespace FddCloud\bean\req\tool\ocr;
class DrivingLicenseOcrReq
{
    public $imageBase64;

    public $backImageBase64;

    /**
     * @return mixed
     */
    public function getImageBase64()
    {
        return $this->imageBase64;
    }

    /**
     * @param mixed $imageBase64
     */
    public function setImageBase64($imageBase64)
    {
        $this->imageBase64 = $imageBase64;
    }

    /**
     * @return mixed
     */
    public function getBackImageBase64()
    {
        return $this->backImageBase64;
    }

    /**
     * @param mixed $backImageBase64
     */
    public function setBackImageBase64($backImageBase64)
    {
        $this->backImageBase64 = $backImageBase64;
    }

}
