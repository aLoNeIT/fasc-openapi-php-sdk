<?php


namespace FddCloud\bean\req\template\signTemplate;
class SignTemplateListFilterInfo
{
    public $signTemplateName;
    public $signTemplateStatus;

    /**
     * @return mixed
     */
    public function getSignTemplateName()
    {
        return $this->signTemplateName;
    }

    /**
     * @param mixed $signTemplateName
     */
    public function setSignTemplateName($signTemplateName)
    {
        $this->signTemplateName = $signTemplateName;
    }

    /**
     * @return mixed
     */
    public function getSignTemplateStatus()
    {
        return $this->signTemplateStatus;
    }

    /**
     * @param mixed $signTemplateStatus
     */
    public function setSignTemplateStatus($signTemplateStatus)
    {
        $this->signTemplateStatus = $signTemplateStatus;
    }


}
