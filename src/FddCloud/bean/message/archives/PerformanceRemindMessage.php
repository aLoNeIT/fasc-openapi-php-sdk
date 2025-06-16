<?php


namespace FddCloud\bean\message\archives;


use FddCloud\bean\message\MessageBase;

/**
 * 履约提醒事件
 * 当有触发履约提醒时，通过该事件回调给业务系统，事件ID：performance-remind
 */
class PerformanceRemindMessage extends MessageBase
{
    public $openCorpId;
    public $archivesId;
    public $performanceId;
    public $performanceType;
    public $reminder;

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

}