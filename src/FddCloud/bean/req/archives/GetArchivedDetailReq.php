<?php
namespace FddCloud\bean\req\archives;
class GetArchivedDetailReq
{
    public $openCorpId;
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
