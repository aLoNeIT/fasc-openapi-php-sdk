<?php


namespace FddCloud\bean\req\appTemplate\signTemplate;
class AppSignTemplateDeleteReq
{
    public $appSignTemplateId;

    /**
     * @return mixed
     */
    public function getAppSignTemplateId()
    {
        return $this->appSignTemplateId;
    }

    /**
     * @param mixed $appSignTemplateId
     */
    public function setAppSignTemplateId($appSignTemplateId)
    {
        $this->appSignTemplateId = $appSignTemplateId;
    }


}