<?php


namespace FddCloud\bean\req\template\docTemplate;
class DocTemplateListFilterInfo
{
    public $docTemplateName;

    /**
     * @return mixed
     */
    public function getDocTemplateName()
    {
        return $this->docTemplateName;
    }

    /**
     * @param mixed $docTemplateName
     */
    public function setDocTemplateName($docTemplateName)
    {
        $this->docTemplateName = $docTemplateName;
    }


}
