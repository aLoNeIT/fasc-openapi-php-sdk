<?php


namespace FddCloud\bean\req\doc;
class FileGetKeywordPositionsReq
{
    public $fileId;

    public $docTemplateId;
    public $keywords;

    /**
     * @return mixed
     */
    public function getFileId()
    {
        return $this->fileId;
    }

    /**
     * @param mixed $fileId
     */
    public function setFileId($fileId)
    {
        $this->fileId = $fileId;
    }

    /**
     * @return mixed
     */
    public function getDocTemplateId()
    {
        return $this->docTemplateId;
    }

    /**
     * @param mixed $docTemplateId
     */
    public function setDocTemplateId($docTemplateId)
    {
        $this->docTemplateId = $docTemplateId;
    }

    /**
     * @return mixed
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @param mixed $keywords
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
    }


}
