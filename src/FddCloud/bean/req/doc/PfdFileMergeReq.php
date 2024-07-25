<?php

namespace FddCloud\bean\req\doc;
class PfdFileMergeReq
{
    public $fddFileUrlList;
    public $fileName;

    /**
     * @return mixed
     */
    public function getFddFileUrlList()
    {
        return $this->fddFileUrlList;
    }

    /**
     * @param mixed $fddFileUrlList
     */
    public function setFddFileUrlList($fddFileUrlList)
    {
        $this->fddFileUrlList = $fddFileUrlList;
    }

    /**
     * @return mixed
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param mixed $fileName
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    }


}
