<?php


namespace FddCloud\bean\req\doc;
class FileProcessReq
{
    public $fddFileUrlList;

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


}
