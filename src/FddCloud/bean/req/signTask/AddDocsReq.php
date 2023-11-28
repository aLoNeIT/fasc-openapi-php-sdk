<?php


namespace FddCloud\bean\req\signTask;

require_once 'SignTaskBaseReq.php';

class AddDocsReq extends SignTaskBaseReq
{
    public $docs;

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


}

