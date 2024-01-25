<?php
namespace FddCloud\bean\req\signTask;
class DocInfo
{
    public $docId;
    public $customDocName;

    /**
     * @return mixed
     */
    public function getDocId()
    {
        return $this->docId;
    }

    /**
     * @param mixed $docId
     */
    public function setDocId($docId)
    {
        $this->docId = $docId;
    }

    /**
     * @return mixed
     */
    public function getCustomDocName()
    {
        return $this->customDocName;
    }

    /**
     * @param mixed $customDocName
     */
    public function setCustomDocName($customDocName)
    {
        $this->customDocName = $customDocName;
    }

}
