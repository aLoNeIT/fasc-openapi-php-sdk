<?php

namespace FddCloud\constants;

class OpenApiUrlConstants
{


    /**
     * ServiceClient
     */
    # ServiceClient 获取服务访问凭证
    const SERVICE_GET_ACCESS_TOKEN = '/service/get-access-token';
    # ServiceClient 获取应用级资源访问凭证(暂不对外开放)。
    const SERVICE_GET_APP_ACCESS_TICKET = '/service/get-app-access-ticket';
    # ServiceClient 获取用户级资源访问凭证(暂不对外开放)。
    const SERVICE_GET_USER_ACCESS_TICKET = '/service/get-user-access-ticket';

    /**
     * UserClient
     */
    # 应用的个人用户帐号管理
    const USER_DISABLE = '/user/disable';
    const USER_ENABLE = '/user/enable';
    const USER_UNBIND = '/user/unbind';
    const USER_GET_DETAIL = '/user/get';
    const USER_GET_IDENTITY_INFO = '/user/get-identity-info';

    /**
     * ToolServiceClient
     */
    # 信息对比校验
    const USER_IDENTITY_TWO_ELEMENT_VERIFY = '/user/identity/two-element-verify';
    const USER_IDENTITY_IDCARD_THREE_ELEMENT_VERIFY = '/user/identity/idcard-three-element-verify';
    const USER_IDENTITY_BANK_THREE_ELEMENT_VERIFY = '/user/identity/bank-three-element-verify';
    const USER_BANK_FOUR_ELEMENT_VERIFY = '/user/bank/four-element-verify';
    const USER_TELECOM_THREE_ELEMENT_VERIFY = '/user/telecom/three-element-verify';
    const CORP_IDENTITY_BUSINESS_THREE_ELEMENT_VERIFY = '/corp/identity/business-three-element-verify';
    const CORP_IDENTITY_BUSINESS_INFO_QUERY = '/corp/identity/business-info-query';
    const USER_FOUR_ELEMENT_VERIFY_GET_URL = '/user/four-element-verify/get-url';
    const USER_THREE_ELEMENT_VERIFY_GET_URL = '/user/three-element-verify/get-url';
    const USER_ELEMENT_VERIFY_GET_IDCARD_IMAGE_DOWNLOAD_URL = '/user/element-verify/get-idcard-image-download-url';

    # 证照OCR
    const USER_OCR_ID_CARD = '/user/ocr/id-card';
    const USER_OCR_BANKCARD = '/user/ocr/bankcard';
    const USER_OCR_DRIVINGLICENSE = '/user/ocr/drivinglicense';
    const USER_OCR_VEHICLELICENSE = '/user/ocr/vehiclelicense';
    const USER_OCR_MAINLAND_PERMIT = '/user/ocr/mainland-permit';
    const USER_OCR_LICENSE = '/user/ocr/license';

    # 个人身份核验
    const USER_VERIFY_FACE_RECOGNITION = '/user/verify/face-recognition';
    const USER_VERIFY_FACE_STATUS_QUERY = '/user/verify/face-status-query';

    /**
     * CorpClient
     */
    # 应用的企业用户帐号管理
    const CORP_DISABLE = '/corp/disable';
    const CORP_ENABLE = '/corp/enable';
    const CORP_UNBIND = '/corp/unbind';
    const CORP_GET_DETAIL = '/corp/get';
    const CORP_GET_IDENTITY_INFO = '/corp/get-identity-info';
    const CORP_GET_IDENTIFIED_STATUS = '/corp/get-identified-status';

    /**
     * OrgClient
     */
    # 组织管理-部门
    const CORP_ORGANIZATION_MANAGE_GET_URL = '/corp/organization/manage/get-url';
    const CORP_DEPT_CREATE = '/corp/dept/create';
    const CORP_DEPT_GET_LIST = '/corp/dept/get-list';
    const CORP_DEPT_GET_DETAIL = '/corp/dept/get-detail';
    const CORP_DEPT_MODIFY = '/corp/dept/modify';
    const CORP_DEPT_DELETE = '/corp/dept/delete';
    # 组织管理-成员
    const CORP_MEMBER_CREATE = '/corp/member/create';
    const CORP_MEMBER_GET_ACTIVE_URL = '/corp/member/get-active-url';
    const CORP_MEMBER_GET_LIST = '/corp/member/get-list';
    const CORP_MEMBER_GET_DETAIL = '/corp/member/get-detail';
    const CORP_MEMBER_MODIFY = '/corp/member/modify';
    const CORP_MEMBER_SET_DEPT = '/corp/member/set-dept';
    const CORP_MEMBER_SET_STATUS = '/corp/member/set-status';
    const CORP_MEMBER_DELETE = '/corp/member/delete';
    # 组织管理-相对方
    const COUNTERPART_GET_LIST = '/counterpart/get-list';

    /**
     * SealClient
     */
    # 印章管理
    const SEAL_MANAGE_GET_URL = '/seal/manage/get-url';
    const SEAL_FREE_SIGN_GET_URL = '/seal/free-sign/get-url';
    const SEAL_CREATE_GET_URL = '/seal/create/get-url';
    const SEAL_GET_LIST = '/seal/get-list';
    const SEAL_GET_DETAIL = '/seal/get-detail';
    const SEAL_MANAGE_GET_APPOINTED_SEAL_URL = '/seal/manage/get-appointed-seal-url';
    const SEAL_GET_USER_LIST = '/seal/get-user-list';
    const SEAL_USER_GET_LIST = '/seal/user/get-list';
    const SEAL_VERIFY_GET_LIST = '/seal/verify/get-list';
    const SEAL_MODIFY = '/seal/modify';
    const SEAL_GRANT_GET_URL = '/seal/grant/get-url';
    const SEAL_GRANT_CANCEL = '/seal/grant/cancel';
    const SEAL_SET_STATUS = '/seal/set-status';
    const SEAL_DELETE = '/seal/delete';
    const PERSONAL_SEAL_GET_LIST = '/personal-seal/get-list';
    const PERSONAL_SEAL_FREE_SIGN_GET_URL = '/personal-seal/free-sign/get-url';
    const CANCEL_SEAL_FREE_SIGN = '/seal/free-sign/cancel';
    const CANCEL_PERSONAL_SEAL_FREE_SIGN = '/personal-seal/free-sign/cancel';
    const PERSONAL_SEAL_GET_MANAGE_URL = '/personal-seal/manage/get-url';
    const PERSONAL_SEAL_GET_CREATE_URL = '/personal-seal/create/get-url';
    const PERSONAL_SEAL_DELETE = '/personal-seal/delete';

    /**
     * DocClient
     */
    # 文件
    const FILE_UPLOAD_BY_URL = '/file/upload-by-url';
    const FILE_GET_UPLOAD_URL = '/file/get-upload-url';
    const FILE_PROCESS = '/file/process';
    const FILE_GET_KEYWORD_POSITIONS = '/file/get-keyword-positions';
    const FILE_VERIFY_SIGN = '/file/verify-sign';

    /**
     * OCRClient
     */
    # 智能审查
    const OCR_EDIT_GET_EXAMINE_URL = '/ocr/edit/get-examine-url';
    const OCR_EDIT_EXAMINE_RESULT_URL = '/ocr/edit/examine-result-url';
    const OCR_EDIT_EXAMINE_RESULT_DATA = '/ocr/edit/examine-result-data';
    # 智能比对
    const OCR_EDIT_GET_COMPARE_URL = '/ocr/edit/get-compare-url';
    const OCR_EDIT_COMPARE_RESULT_URL = '/ocr/edit/compare-result-url';
    const OCR_EDIT_COMPARE_RESULT_DATA = '/ocr/edit/compare-result-data';

    /**
     * TemplateClient
     */
    # 文档模板
    const DOC_TEMPLATE_GET_LIST = '/doc-template/get-list';
    const DOC_TEMPLATE_GET_DETAIL = '/doc-template/get-detail';
    const DOC_TEMPLATE_CREATE = '/doc-template/create';
    const DOC_TEMPLATE_COPY_CREATE = '/doc-template/copy-create';
    const DOC_TEMPLATE_FILL_VALUES = '/doc-template/fill-values';
    # 签署模板
    const SIGN_TEMPLATE_GET_LIST = '/sign-template/get-list';
    const SIGN_TEMPLATE_GET_DETAIL = '/sign-template/get-detail';
    const TEMPLATE_MANAGE_GET_URL = '/template/manage/get-url';
    const TEMPLATE_CREATE_GET_URL = '/template/create/get-url';
    const TEMPLATE_PREVIEW_GET_URL = '/template/preview/get-url';
    const TEMPLATE_EDIT_GET_URL = '/template/edit/get-url';
    const SET_DOC_TEMPLATE_STATUS = '/doc-template/set-status';
    const DELETE_DOC_TEMPLATE = '/doc-template/delete';
    const SET_SIGN_TEMPLATE_STATUS = '/sign-template/set-status';
    const DELETE_SIGN_TEMPLATE = '/sign-template/delete';
    # 自定义控件
    const CORP_FIELD_GET_LIST = '/corp-field/get-list';
    const CORP_FIELD_CREATE = '/corp-field/create';
    const CORP_FIELD_DELETE = '/corp-field/delete';

    /**
     * ApprovalClient
     */
    const APPROVAL_FLOW_LIST = '/approval-flow/get-list';
    const APPROVAL_FLOW_DETAIL = '/approval-flow/get-detail';
    const APPROVAL_LIST = '/approval/get-list';
    const APPROVAL_DETAIL = '/approval/get-detail';
    const APPROVAL_URL = '/approval/get-url';

    /**
     * CallbackClient
     */
    const GET_CALL_BACK_LIST = '/callback/get-list';

    /**
     * AppTemplateClient
     */
    const APP_TEMPLATE_CREATE_GET_URL = '/app-template/create/get-url';
    const APP_TEMPLATE_EDIT_GET_URL = '/app-template/edit/get-url';
    const APP_TEMPLATE_PREVIEW_GET_URL = '/app-template/preview/get-url';
    const APP_DOC_TEMPLATE_GET_LIST = '/app-doc-template/get-list';
    const APP_DOC_TEMPLATE_GET_DETAIL = '/app-doc-template/get-detail';
    const APP_DOC_TEMPLATE_SET_STATUS = '/app-doc-template/set-status';
    const APP_DOC_TEMPLATE_DELETE = '/app-doc-template/delete';
    const APP_SIGN_TEMPLATE_GET_LIST = '/app-sign-template/get-list';
    const APP_SIGN_TEMPLATE_GET_DETAIL = '/app-sign-template/get-detail';
    const APP_SIGN_TEMPLATE_SET_STATUS = '/app-sign-template/set-status';
    const APP_SIGN_TEMPLATE_DELETE = '/app-sign-template/delete';

    const APP_FIELD_CREATE = '/app-field/create';
    const APP_FIELD_MODIFY = '/app-field/modify';
    const APP_FIELD_SET_STATUS = '/app-field/set-status';
    const APP_FIELD_GET_LIST = '/app-field/get-list';
    /**
     * SignTaskClient
     */
    #  签署任务
    # 1)签署任务创建
    const SIGN_TASK_CREATE = '/sign-task/create';
    const SIGN_TASK_CREATE_WITH_TEMPLATE = '/sign-task/create-with-template';
    const SIGN_TASK_START = '/sign-task/start';
    const SIGN_TASK_ADD_DOCS = '/sign-task/doc/add';
    const SIGN_TASK_DELETE_DOCS = '/sign-task/doc/delete';
    const SIGN_TASK_ADD_FIELD = '/sign-task/field/add';
    const SIGN_TASK_DELETE_FIELD = '/sign-task/field/delete';
    const SIGN_TASK_ADD_ATTACHS = '/sign-task/attach/add';
    const SIGN_TASK_DELETE_ATTACHS = '/sign-task/attach/delete';
    const SIGN_TASK_ADD_ACTORS = '/sign-task/actor/add';
    const SIGN_TASK_DELETE_ACTOR = '/sign-task/actor/delete';
    const SIGN_TASK_FILL_FIELDS_VALUE = '/sign-task/field/fill-values';
    const SIGN_TASK_GET_EDIT_URL = '/sign-task/get-edit-url';
    const SIGN_TASK_GET_PREVIEW_URL = '/sign-task/get-preview-url';


    # 2)参与方签署
    const SIGN_TASK_ACTOR_GET_URL = '/sign-task/actor/get-url';
    const SIGN_TASK_GET_BATCH_SIGN_URL = '/sign-task/get-batch-sign-url';


    # 3)签署任务查询
    const SIGN_TASK_OWNER_GET_LIST = '/sign-task/owner/get-list';
    const SIGN_TASK_APP_GET_DETAIL = '/sign-task/app/get-detail';
    const SIGN_TASK_ACTOR_GET_LIST = '/sign-task/actor/list';
    const SIGN_TASK_FIELD_GET_LIST = '/sign-task/field/list';
    const SIGN_TASK_APPROVAL_GET_INFO = '/sign-task/get-approval-info';
    const SIGN_TASK_CATALOG_LIST = '/sign-task-catalog/list';
    const SIGN_TASK_BUSINESS_TYPE_GET_LIST = '/sign-task/business-type/get-list';
    const SIGN_TASK_EVIDENCE_REPORT_GET_DOWNLOAD_URL = '/sign-task/evidence-report/get-download-url';
    const SIGN_TASK_OWNER_GET_DOWNLOAD_URL = '/sign-task/owner/get-download-url';
    const SIGN_TASK_ACTOR_GET_FACE_PICTURE = '/sign-task/actor/get-face-picture';
    const GET_SIGN_TASK_OWNER_SLICING_TICKET_ID = '/sign-task/owner/get-slicing-ticket-id';
    const GET_SIGN_TASK_OWNER_PIC_DOWNLOAD_URL = '/sign-task/owner/get-pic-download-url';
    const GET_AUDIO_VIDEO_DOWNLOAD_URL = '/sign-task/actor/get-audio-video-download-url';
    const SIGN_TASK_ACTOR_V3_GET_URL = '/sign-task/actor/v3/get-url';


    # 4)签署任务控制
    const SIGN_TASK_DOC_FINALIZE = '/sign-task/doc-finalize';
    const SIGN_TASK_URGE = '/sign-task/urge';
    const SIGN_TASK_CANCEL = '/sign-task/cancel';
    const SIGN_TASK_BLOCK = '/sign-task/block';
    const SIGN_TASK_UNBLOCK = '/sign-task/unblock';
    const SIGN_TASK_FINISH = '/sign-task/finish';
    const SIGN_TASK_DELETE = '/sign-task/delete';
    const SIGN_TASK_ABOLISH = '/sign-task/abolish';
    const SIGN_TASK_EXTENSION = '/sign-task/extension';


    /**
     * EUIClient
     */
    # 对EUI页面链接进行管理操作，如获取个人授权链接、构造新企业授权链接、获取计费链接、获取签署编辑链接等
    # 1)获取应用级资源链接
    const APP_PAGE_RESOURCE_GET_URL = '/app-page-resource/get-url';
    # 2)获取用户级资源链接
    const USER_PAGE_RESOURCE_GET_URL = '/user-page-resource/get-url';
    # 3)获取个人授权链接
    const USER_GET_AUTH_URL = '/user/get-auth-url';
    # 4)获取个人授权链接
    const CORP_GET_AUTH_URL = '/corp/get-auth-url';
    # 5)构造企业授权链接
    # https://{appId}.e.fadada.com/authorize/list?authScopes={authScopes}&corpName={corpName}&clientCorpId={clientCorpId}&redirectUrl={URLEncode(Url)}&signature={signature}&timestamp={timestamp}
    # 6)获取计费链接
    const BILLING_GET_BILL_URL = '/billing/get-bill-url';
}
