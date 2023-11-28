<?php


namespace FddCloud\bean\req\tool\identity;
class GetUserFourElementVerifyUrlReq
{
    public $clientUserId;
    public $userName;
    public $userIdentNo;
    public $bankAccountNo;
    public $mobile;
    public $idCardImage;
    public $faceSide;
    public $nationalEmblemSide;
    public $redirectUrl;

    /**
     * @return mixed
     */
    public function getClientUserId()
    {
        return $this->clientUserId;
    }

    /**
     * @param mixed $clientUserId
     */
    public function setClientUserId($clientUserId)
    {
        $this->clientUserId = $clientUserId;
    }

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
    public function getBankAccountNo()
    {
        return $this->bankAccountNo;
    }

    /**
     * @param mixed $bankAccountNo
     */
    public function setBankAccountNo($bankAccountNo)
    {
        $this->bankAccountNo = $bankAccountNo;
    }

    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param mixed $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

    /**
     * @return mixed
     */
    public function getIdCardImage()
    {
        return $this->idCardImage;
    }

    /**
     * @param mixed $idCardImage
     */
    public function setIdCardImage($idCardImage)
    {
        $this->idCardImage = $idCardImage;
    }

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

    /**
     * @return mixed
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * @param mixed $redirectUrl
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
    }


}