<?php
namespace FddCloud\bean\req\archives;
class ArchivesPerformanceModifyReq
{
    public $openCorpId;
    public $archivesId;
    public $performanceId;
    public $performanceType;
    public $performanceName;
    public $expireTime;
    public $remindStartDate;
    public $remindFrequency;
    public $cycleDays;
    public $remindTime;
    public $amount;
    public $reminder;
    public $isRemind;

    /**
     * @return mixed
     */
    public function getOpenCorpId()
    {
        return $this->openCorpId;
    }

    /**
     * @param mixed $openCorpId
     */
    public function setOpenCorpId($openCorpId)
    {
        $this->openCorpId = $openCorpId;
    }

    /**
     * @return mixed
     */
    public function getArchivesId()
    {
        return $this->archivesId;
    }

    /**
     * @param mixed $archivesId
     */
    public function setArchivesId($archivesId)
    {
        $this->archivesId = $archivesId;
    }

    /**
     * @return mixed
     */
    public function getPerformanceId()
    {
        return $this->performanceId;
    }

    /**
     * @param mixed $performanceId
     */
    public function setPerformanceId($performanceId)
    {
        $this->performanceId = $performanceId;
    }

    /**
     * @return mixed
     */
    public function getPerformanceType()
    {
        return $this->performanceType;
    }

    /**
     * @param mixed $performanceType
     */
    public function setPerformanceType($performanceType)
    {
        $this->performanceType = $performanceType;
    }

    /**
     * @return mixed
     */
    public function getPerformanceName()
    {
        return $this->performanceName;
    }

    /**
     * @param mixed $performanceName
     */
    public function setPerformanceName($performanceName)
    {
        $this->performanceName = $performanceName;
    }

    /**
     * @return mixed
     */
    public function getExpireTime()
    {
        return $this->expireTime;
    }

    /**
     * @param mixed $expireTime
     */
    public function setExpireTime($expireTime)
    {
        $this->expireTime = $expireTime;
    }

    /**
     * @return mixed
     */
    public function getRemindStartDate()
    {
        return $this->remindStartDate;
    }

    /**
     * @param mixed $remindStartDate
     */
    public function setRemindStartDate($remindStartDate)
    {
        $this->remindStartDate = $remindStartDate;
    }

    /**
     * @return mixed
     */
    public function getRemindFrequency()
    {
        return $this->remindFrequency;
    }

    /**
     * @param mixed $remindFrequency
     */
    public function setRemindFrequency($remindFrequency)
    {
        $this->remindFrequency = $remindFrequency;
    }

    /**
     * @return mixed
     */
    public function getCycleDays()
    {
        return $this->cycleDays;
    }

    /**
     * @param mixed $cycleDays
     */
    public function setCycleDays($cycleDays)
    {
        $this->cycleDays = $cycleDays;
    }

    /**
     * @return mixed
     */
    public function getRemindTime()
    {
        return $this->remindTime;
    }

    /**
     * @param mixed $remindTime
     */
    public function setRemindTime($remindTime)
    {
        $this->remindTime = $remindTime;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getReminder()
    {
        return $this->reminder;
    }

    /**
     * @param mixed $reminder
     */
    public function setReminder($reminder)
    {
        $this->reminder = $reminder;
    }

    /**
     * @return mixed
     */
    public function getIsRemind()
    {
        return $this->isRemind;
    }

    /**
     * @param mixed $isRemind
     */
    public function setIsRemind($isRemind)
    {
        $this->isRemind = $isRemind;
    }


}
