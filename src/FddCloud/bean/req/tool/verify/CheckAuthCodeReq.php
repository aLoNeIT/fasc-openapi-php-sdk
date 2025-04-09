<?php
namespace FddCloud\bean\req\tool\verify;
class CheckAuthCodeReq
{
    public $transactionId;
    public $authcode;

    /**
     * @return mixed
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @param mixed $transactionId
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
    }

    /**
     * @return mixed
     */
    public function getAuthcode()
    {
        return $this->authcode;
    }

    /**
     * @param mixed $authcode
     */
    public function setAuthcode($authcode)
    {
        $this->authcode = $authcode;
    }

}
