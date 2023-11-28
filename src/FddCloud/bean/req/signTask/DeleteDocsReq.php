<?php


namespace FddCloud\bean\req\signTask;

class DeleteDocsReq extends SignTaskBaseReq
{
    public $docIds;

    /**
     * @return mixed
     */
    public function getDocIds()
    {
        return $this->docIds;
    }

    /**
     * @param mixed $docIds
     */
    public function setDocIds($docIds)
    {
        $this->docIds = $docIds;
    }


}
