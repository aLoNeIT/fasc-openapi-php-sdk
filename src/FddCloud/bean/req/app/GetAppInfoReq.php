<?php

namespace FddCloud\bean\req\app ;

class GetAppInfoReq
{
    public $queriedAppId;

    /**
     * @return mixed
     */
    public function getQueriedAppId()
    {
        return $this->queriedAppId;
    }

    /**
     * @param mixed $queriedAppId
     */
    public function setQueriedAppId($queriedAppId)
    {
        $this->queriedAppId = $queriedAppId;
    }

}
