<?php
namespace FddCloud\bean\req\seal;
class GetSealCertFileReq
{
    public $ownerId;
    public $certNo;
    public $getFileType;

    /**
     * @return mixed
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * @param mixed $ownerId
     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;
    }

    /**
     * @return mixed
     */
    public function getCertNo()
    {
        return $this->certNo;
    }

    /**
     * @param mixed $certNo
     */
    public function setCertNo($certNo)
    {
        $this->certNo = $certNo;
    }

    /**
     * @return mixed
     */
    public function getGetFileType()
    {
        return $this->getFileType;
    }

    /**
     * @param mixed $getFileType
     */
    public function setGetFileType($getFileType)
    {
        $this->getFileType = $getFileType;
    }

}