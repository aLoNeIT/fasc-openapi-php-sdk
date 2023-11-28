<?php


namespace FddCloud\bean\req\tool\identity;
class BusinessThreeElementVerifyReq
{
    public $corpName;

    public $corpIdentNo;

    public $legalRepName;

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

}
