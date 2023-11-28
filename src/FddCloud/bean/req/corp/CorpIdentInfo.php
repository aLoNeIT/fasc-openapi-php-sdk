<?php


namespace FddCloud\bean\req\corp;
class CorpIdentInfo
{
    public $corpName;

    public $corpIdentType;

    public $corpIdentNo;

    public $legalRepName;

    public $license;

    public $corpIdentMethod;

    /**
     * @return mixed
     */
    public function getCorpName()
    {
        return $this->corpName;
    }

    /**
     * @param mixed $corpName
     */
    public function setCorpName($corpName)
    {
        $this->corpName = $corpName;
    }

    /**
     * @return mixed
     */
    public function getCorpIdentType()
    {
        return $this->corpIdentType;
    }

    /**
     * @param mixed $corpIdentType
     */
    public function setCorpIdentType($corpIdentType)
    {
        $this->corpIdentType = $corpIdentType;
    }

    /**
     * @return mixed
     */
    public function getCorpIdentNo()
    {
        return $this->corpIdentNo;
    }

    /**
     * @param mixed $corpIdentNo
     */
    public function setCorpIdentNo($corpIdentNo)
    {
        $this->corpIdentNo = $corpIdentNo;
    }

    /**
     * @return mixed
     */
    public function getLegalRepName()
    {
        return $this->legalRepName;
    }

    /**
     * @param mixed $legalRepName
     */
    public function setLegalRepName($legalRepName)
    {
        $this->legalRepName = $legalRepName;
    }

    /**
     * @return mixed
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * @param mixed $license
     */
    public function setLicense($license)
    {
        $this->license = $license;
    }

    /**
     * @return mixed
     */
    public function getCorpIdentMethod()
    {
        return $this->corpIdentMethod;
    }

    /**
     * @param mixed $corpIdentMethod
     */
    public function setCorpIdentMethod($corpIdentMethod)
    {
        $this->corpIdentMethod = $corpIdentMethod;
    }


}
