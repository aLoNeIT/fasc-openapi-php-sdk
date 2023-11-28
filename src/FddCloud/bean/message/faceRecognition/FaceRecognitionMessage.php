<?php


namespace FddCloud\bean\message\faceRecognition;


use FddCloud\bean\message\MessageBase;

/**
 * （人脸核身）个人身份核验
 * 当用户完成刷脸操作时，通过该事件回调给业务系统，事件ID：face-recognition
 */
class FaceRecognitionMessage extends MessageBase
{
    public $userName;
    public $userIdentNo;
    public $faceauthMode;
    public $resultStatus;
    public $resultTime;
    public $failedReason;
    public $urlStatus;
    public $createSerialNo;

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * @return mixed
     */
    public function getUserIdentNo()
    {
        return $this->userIdentNo;
    }

    /**
     * @param mixed $userIdentNo
     */
    public function setUserIdentNo($userIdentNo)
    {
        $this->userIdentNo = $userIdentNo;
    }

    /**
     * @return mixed
     */
    public function getFaceauthMode()
    {
        return $this->faceauthMode;
    }

    /**
     * @param mixed $faceauthMode
     */
    public function setFaceauthMode($faceauthMode)
    {
        $this->faceauthMode = $faceauthMode;
    }

    /**
     * @return mixed
     */
    public function getResultStatus()
    {
        return $this->resultStatus;
    }

    /**
     * @param mixed $resultStatus
     */
    public function setResultStatus($resultStatus)
    {
        $this->resultStatus = $resultStatus;
    }

    /**
     * @return mixed
     */
    public function getResultTime()
    {
        return $this->resultTime;
    }

    /**
     * @param mixed $resultTime
     */
    public function setResultTime($resultTime)
    {
        $this->resultTime = $resultTime;
    }

    /**
     * @return mixed
     */
    public function getFailedReason()
    {
        return $this->failedReason;
    }

    /**
     * @param mixed $failedReason
     */
    public function setFailedReason($failedReason)
    {
        $this->failedReason = $failedReason;
    }

    /**
     * @return mixed
     */
    public function getUrlStatus()
    {
        return $this->urlStatus;
    }

    /**
     * @param mixed $urlStatus
     */
    public function setUrlStatus($urlStatus)
    {
        $this->urlStatus = $urlStatus;
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