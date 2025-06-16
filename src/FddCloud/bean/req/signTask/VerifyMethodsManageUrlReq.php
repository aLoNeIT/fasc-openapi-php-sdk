<?php

namespace FddCloud\bean\req\signTask;

class VerifyMethodsManageUrlReq extends SignTaskBaseReq
{
    public $verifyMethods;

    /**
     * @return mixed
     */
    public function getVerifyMethods()
    {
        return $this->verifyMethods;
    }

    /**
     * @param mixed $verifyMethods
     */
    public function setVerifyMethods($verifyMethods)
    {
        $this->verifyMethods = $verifyMethods;
    }

}
