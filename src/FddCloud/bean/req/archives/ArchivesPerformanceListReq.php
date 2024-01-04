<?php
namespace FddCloud\bean\req\archives;
class ArchivesPerformanceListReq
{
    public $openCorpId;
    public $memberId;
    public $archivesId;

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
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * @param mixed $memberId
     */
    public function setMemberId($memberId)
    {
        $this->memberId = $memberId;
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

}
