<?php
namespace FddCloud\bean\req\collect;
class GetSmartformSerialInfoReq
{
    public $openCorpId;
    public $formId;
    public $serialIds;

    /**
     * @return mixed
     */
    public function getOpenCorpId()
    {
        return $this->openCorpId;
    }

    /**
     * @param mixed $openCorpId
     */
    public function setOpenCorpId($openCorpId)
    {
        $this->openCorpId = $openCorpId;
    }

    /**
     * @return mixed
     */
    public function getFormId()
    {
        return $this->formId;
    }

    /**
     * @param mixed $formId
     */
    public function setFormId($formId)
    {
        $this->formId = $formId;
    }

    /**
     * @return mixed
     */
    public function getSerialIds()
    {
        return $this->serialIds;
    }

    /**
     * @param mixed $serialIds
     */
    public function setSerialIds($serialIds)
    {
        $this->serialIds = $serialIds;
    }

}