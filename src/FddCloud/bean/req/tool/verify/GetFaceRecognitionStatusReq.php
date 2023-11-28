<?php

namespace FddCloud\bean\req\tool\verify;
class GetFaceRecognitionStatusReq
{
    public $serialNo;
    public $getFile;

    /**
     * @return mixed
     */
    public function getSerialNo()
    {
        return $this->serialNo;
    }

    /**
     * @param mixed $serialNo
     */
    public function setSerialNo($serialNo)
    {
        $this->serialNo = $serialNo;
    }

    /**
     * @return mixed
     */
    public function getGetFile()
    {
        return $this->getFile;
    }

    /**
     * @param mixed $getFile
     */
    public function setGetFile($getFile)
    {
        $this->getFile = $getFile;
    }

}
