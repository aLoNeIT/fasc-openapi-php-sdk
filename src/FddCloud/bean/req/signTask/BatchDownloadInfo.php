<?php
namespace FddCloud\bean\req\signTask;
class BatchDownloadInfo
{
    public $batchSigntaskId;
    public $docInfos = array();
    public $attachInfos = array();

    /**
     * @return mixed
     */
    public function getBatchSigntaskId()
    {
        return $this->batchSigntaskId;
    }

    /**
     * @param mixed $batchSigntaskId
     */
    public function setBatchSigntaskId($batchSigntaskId)
    {
        $this->batchSigntaskId = $batchSigntaskId;
    }

    public function getDocInfos(): array
    {
        return $this->docInfos;
    }

    public function setDocInfos(array $docInfos)
    {
        $this->docInfos = $docInfos;
    }

    public function getAttachInfos(): array
    {
        return $this->attachInfos;
    }

    public function setAttachInfos(array $attachInfos)
    {
        $this->attachInfos = $attachInfos;
    }

}
