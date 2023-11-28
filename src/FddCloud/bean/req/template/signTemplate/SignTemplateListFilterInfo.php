<?php


namespace FddCloud\bean\req\template\signTemplate;
class SignTemplateListFilterInfo
{
    public $signTemplateName;

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


}
