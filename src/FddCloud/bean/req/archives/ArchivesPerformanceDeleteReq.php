<?php
namespace FddCloud\bean\req\archives;
class ArchivesPerformanceDeleteReq
{
    public $openCorpId;
    public $archivesId;
    public $performanceId;

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

}
