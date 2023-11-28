<?php


namespace FddCloud\client;

use FddCloud\FddCloud\bean\req\appTemplate\appField\AppFieldCreateReq;
use FddCloud\FddCloud\bean\req\appTemplate\appField\AppFieldGetListReq;
use FddCloud\FddCloud\bean\req\appTemplate\appField\AppFieldModifyReq;
use FddCloud\bean\req\appTemplate\appField\AppFieldSetStatusReq;
use FddCloud\bean\req\appTemplate\AppTemplateCreateGetUrlReq;
use FddCloud\bean\req\appTemplate\AppTemplateEditGetUrlReq;
use FddCloud\bean\req\appTemplate\AppTemplatePreviewGetUrlReq;
use FddCloud\bean\req\appTemplate\docTemplate\AppDocTemplateDeleteReq;
use FddCloud\bean\req\appTemplate\docTemplate\AppDocTemplateDetailReq;
use FddCloud\bean\req\appTemplate\docTemplate\AppDocTemplateListReq;
use FddCloud\bean\req\appTemplate\docTemplate\AppDocTemplateSetStatusReq;
use FddCloud\bean\req\appTemplate\signTemplate\AppSignTemplateDeleteReq;
use FddCloud\bean\req\appTemplate\signTemplate\AppSignTemplateDetailReq;
use FddCloud\bean\req\appTemplate\signTemplate\AppSignTemplateListReq;
use FddCloud\bean\req\appTemplate\signTemplate\AppSignTemplateSetStatusReq;
use FddCloud\constants\OpenApiUrlConstants;


class AppTemplateClient
{
    private $client;

    public function __construct(IClient $client)
    {
        $this->client = $client;
    }

    # 查询应用文档模板列表
    function appDocTemplateGetList($accessToken, AppDocTemplateListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::APP_DOC_TEMPLATE_GET_LIST);
    }

    # 获取应用文档模板详情
    function appDocTemplateGetDetail($accessToken, AppDocTemplateDetailReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::APP_DOC_TEMPLATE_GET_DETAIL);
    }

    # 启用/停用应用文档模板
    function appDocTemplateSetStatus($accessToken, AppDocTemplateSetStatusReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::APP_DOC_TEMPLATE_SET_STATUS);
    }

    # 删除应用文档模板
    function appDocTemplateDelete($accessToken, AppDocTemplateDeleteReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::APP_DOC_TEMPLATE_DELETE);
    }

    # 查询应用签署任务模板列表
    function appSignTemplateGetList($accessToken, AppSignTemplateListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::APP_SIGN_TEMPLATE_GET_LIST);
    }

    # 获取应用签署任务模板详情
    function appSignTemplateGetDetail($accessToken, AppSignTemplateDetailReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::APP_SIGN_TEMPLATE_GET_DETAIL);
    }

    # 启用/停用应用签署任务模板
    function appSignTemplateSetStatus($accessToken, AppSignTemplateSetStatusReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::APP_SIGN_TEMPLATE_SET_STATUS);
    }

    # 删除应用签署任务模板
    function appSignTemplateDelete($accessToken, AppSignTemplateDeleteReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::APP_SIGN_TEMPLATE_DELETE);
    }

    # 获取应用模板新增链接
    function appTemplateCreateGetUrl($accessToken, AppTemplateCreateGetUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::APP_TEMPLATE_CREATE_GET_URL);
    }

    # 获取应用模板编辑链接
    function appTemplateEditGetUrl($accessToken, AppTemplateEditGetUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::APP_TEMPLATE_EDIT_GET_URL);
    }

    # 获取应用模板预览链接
    function appTemplatePreviewGetUrl($accessToken, AppTemplatePreviewGetUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::APP_TEMPLATE_PREVIEW_GET_URL);
    }

    # 创建业务控件
    function appFieldCreate($accessToken, AppFieldCreateReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::APP_FIELD_CREATE);
    }

    # 修改业务控件
    function appFieldModify($accessToken, AppFieldModifyReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::APP_FIELD_MODIFY);
    }

    # 设置业务控件状态
    function appFieldSetStatus($accessToken, AppFieldSetStatusReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::APP_FIELD_SET_STATUS);
    }

    # 查询业务控件列表
    function appFieldGetList($accessToken, AppFieldGetListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::APP_FIELD_GET_LIST);
    }
}
