<?php

namespace FddCloud\bean\message\template;
use FddCloud\bean\message\MessageBase;

/**
 * 模板创建事件
 * 集成方通过EUI页面创建模板后后，通过该事件回调给应用，事件ID: template-create
 * 接收事件后，对于主体的模板调用【查询文档模板/签署模板详情】的接口获取具体内容；对于应用的模板调用【查询应用文档模板/应用签署模板详情】的接口获取具体内容。
 */
class TemplateCreateMessage extends MessageBase
{
    public $openCorpId;
    public $templateId;
    public $type;
    public $createSerialNo;
    public $clientCorpId;

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
    public function getTemplateId()
    {
        return $this->templateId;
    }

    /**
     * @param mixed $templateId
     */
    public function setTemplateId($templateId)
    {
        $this->templateId = $templateId;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getCreateSerialNo()
    {
        return $this->createSerialNo;
    }

    /**
     * @param mixed $createSerialNo
     */
    public function setCreateSerialNo($createSerialNo)
    {
        $this->createSerialNo = $createSerialNo;
    }

    /**
     * @return mixed
     */
    public function getClientCorpId()
    {
        return $this->clientCorpId;
    }

    /**
     * @param mixed $clientCorpId
     */
    public function setClientCorpId($clientCorpId)
    {
        $this->clientCorpId = $clientCorpId;
    }

}
