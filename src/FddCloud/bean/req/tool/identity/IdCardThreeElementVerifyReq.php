<?php


namespace FddCloud\bean\req\tool\identity;
class IdCardThreeElementVerifyReq
{
    public $userName;

    public $userIdentNo;

    public $imgBase64;

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
    public function getImgBase64()
    {
        return $this->imgBase64;
    }

    /**
     * @param mixed $imgBase64
     */
    public function setImgBase64($imgBase64)
    {
        $this->imgBase64 = $imgBase64;
    }
}
