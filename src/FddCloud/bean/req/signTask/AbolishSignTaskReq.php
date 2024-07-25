<?php


namespace FddCloud\bean\req\signTask;

class AbolishSignTaskReq extends SignTaskBaseReq
{
    public $abolishedInitiator;

    public $initiatorMemberId;

    public $docSource;

    public $reason;

    public $signInOrder;

    public $docs;

    public $actors;

    public $autoStart;

    public $signTaskSubject;

    public $expiresTime;

    public $businessTypeId;

    public $businessCode;

    public $abolishApprovalFlowId;

    public $catalogId;

    public $businessId;

    public $transReferenceId;

    public $certCAOrg;

    public $fileFormat;

    /**
     * @return mixed
     */
    public function getAbolishedInitiator()
    {
        return $this->abolishedInitiator;
    }

    /**
     * @param mixed $abolishedInitiator
     */
    public function setAbolishedInitiator($abolishedInitiator)
    {
        $this->abolishedInitiator = $abolishedInitiator;
    }

    /**
     * @return mixed
     */
    public function getInitiatorMemberId()
    {
        return $this->initiatorMemberId;
    }

    /**
     * @param mixed $initiatorMemberId
     */
    public function setInitiatorMemberId($initiatorMemberId)
    {
        $this->initiatorMemberId = $initiatorMemberId;
    }

    /**
     * @return mixed
     */
    public function getDocSource()
    {
        return $this->docSource;
    }

    /**
     * @param mixed $docSource
     */
    public function setDocSource($docSource)
    {
        $this->docSource = $docSource;
    }

    /**
     * @return mixed
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param mixed $reason
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
    }

    /**
     * @return mixed
     */
    public function getDocs()
    {
        return $this->docs;
    }

    /**
     * @param mixed $docs
     */
    public function setDocs($docs)
    {
        $this->docs = $docs;
    }

    /**
     * @return mixed
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * @param mixed $actors
     */
    public function setActors($actors)
    {
        $this->actors = $actors;
    }

    /**
     * @return mixed
     */
    public function getAutoStart()
    {
        return $this->autoStart;
    }

    /**
     * @param mixed $autoStart
     */
    public function setAutoStart($autoStart)
    {
        $this->autoStart = $autoStart;
    }

    /**
     * @return mixed
     */
    public function getSignTaskSubject()
    {
        return $this->signTaskSubject;
    }

    /**
     * @param mixed $signTaskSubject
     */
    public function setSignTaskSubject($signTaskSubject)
    {
        $this->signTaskSubject = $signTaskSubject;
    }

    /**
     * @return mixed
     */
    public function getExpiresTime()
    {
        return $this->expiresTime;
    }

    /**
     * @param mixed $expiresTime
     */
    public function setExpiresTime($expiresTime)
    {
        $this->expiresTime = $expiresTime;
    }

    /**
     * @return mixed
     */
    public function getBusinessTypeId()
    {
        return $this->businessTypeId;
    }

    /**
     * @param mixed $businessTypeId
     */
    public function setBusinessTypeId($businessTypeId)
    {
        $this->businessTypeId = $businessTypeId;
    }

    /**
     * @return mixed
     */
    public function getBusinessCode()
    {
        return $this->businessCode;
    }

    /**
     * @param mixed $businessCode
     */
    public function setBusinessCode($businessCode)
    {
        $this->businessCode = $businessCode;
    }

    /**
     * @return mixed
     */
    public function getAbolishApprovalFlowId()
    {
        return $this->abolishApprovalFlowId;
    }

    /**
     * @param mixed $abolishApprovalFlowId
     */
    public function setAbolishApprovalFlowId($abolishApprovalFlowId)
    {
        $this->abolishApprovalFlowId = $abolishApprovalFlowId;
    }

    /**
     * @return mixed
     */
    public function getCatalogId()
    {
        return $this->catalogId;
    }

    /**
     * @param mixed $catalogId
     */
    public function setCatalogId($catalogId)
    {
        $this->catalogId = $catalogId;
    }

    /**
     * @return mixed
     */
    public function getBusinessId()
    {
        return $this->businessId;
    }

    /**
     * @param mixed $businessId
     */
    public function setBusinessId($businessId)
    {
        $this->businessId = $businessId;
    }

    /**
     * @return mixed
     */
    public function getTransReferenceId()
    {
        return $this->transReferenceId;
    }

    /**
     * @param mixed $transReferenceId
     */
    public function setTransReferenceId($transReferenceId)
    {
        $this->transReferenceId = $transReferenceId;
    }

    /**
     * @return mixed
     */
    public function getCertCAOrg()
    {
        return $this->certCAOrg;
    }

    /**
     * @param mixed $certCAOrg
     */
    public function setCertCAOrg($certCAOrg)
    {
        $this->certCAOrg = $certCAOrg;
    }

    /**
     * @return mixed
     */
    public function getSignInOrder()
    {
        return $this->signInOrder;
    }

    /**
     * @param mixed $signInOrder
     */
    public function setSignInOrder($signInOrder)
    {
        $this->signInOrder = $signInOrder;
    }

    /**
     * @return mixed
     */
    public function getFileFormat()
    {
        return $this->fileFormat;
    }

    /**
     * @param mixed $fileFormat
     */
    public function setFileFormat($fileFormat)
    {
        $this->fileFormat = $fileFormat;
    }


}