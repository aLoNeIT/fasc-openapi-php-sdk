# FASC OpenApi PHP SDK v5.1 说明

# 简介

欢迎使用法大大开发者工具套件（SDK），PHP SDK 是法大大电子合同和电子签云服务开放平台（FASC OPEN API）的配套工具。



# 版本说明

FASC.openAPI 产品目前存在两个子版本号：v5.0、v5.1， 均在持续迭代维护。

当前页面SDK基于FASC.openAPI v5.1子版本开发，如需使用FASC.openAPI v5.0版本SDK，请访问：

https://gitee.com/fadada-cloud/fasc-openapi-php-sdk/tree/v5.0




# 目录结构

- SDK项目层级
```php
fasc-openapi-php-sdk
    - src
        - FddCloud
            - bean //里面放的是所有接口请求的对象参数
            - constants //里面放的是接口url地址和应用的配置信息
            - client //对应接口各个模块的client，接入方可以参考下面用例初始化client后调用
            - utils //里面是封装好工具类，接入方开发人员可以参考   
	
```
- SDK 目前支持以下模块，对应 client 可支持具体的业务方法：

| 模块                        | 模块中文名        | 模块说明                        |
|---------------------------|--------------|-----------------------------|
| GetService                | 服务访问凭证       | 获取服务访问凭证                    |
| UserClient                | 个人认证授权管理     | 包含个人用户认证、授权操作               |
| CorpClient                | 企业认证授权管理     | 包含企业用户认证、授权操作               |
| OrgClient                 | 组织管理         | 包含部门、成员、相对方管理               |
| SealClient                | 印章管理         | 包含企业印章、个人签名管理               |
| TemplateClient            | 模板管理         | 包含模板、文档 增删改及自定义控件管理         |
| AppTemplateClient         | 应用模板管理       | 包含应用的模板、文档 增删改及自定义控件管理      |
| DocClient                 | 文档处理         | 包含文件上传、文件处理、OFD文件追加、文档验签等   |
| SignTaskClient            | 签署任务         | 包含签署任务创建、签署、任务查询、任务控制       |
| EUIClient                 | 计费管理         | 包含计费链接的获取                   |
| ApprovalClient            | 审批管理         | 包含审批流程、审批单据的查询和审批链接的获取      |
| ArchivesPerformanceClient | 合同归档         | 包含合同归档、合同履约相关功能             |
| OCRClient                 | 智能审查和智能比对    | 包含智能审查和智能比对                 |
| ToolServiceClient         | 工具能力服务       | 包含信息比对校验、证照OCR、个人身份核验相关工具能力 |
| CallbackClient            | 回调管理         | 包含智能审查和智能比对                 |




# 依赖环境

PHP 7.0.10 版本及以上


# 调用示例
接入方初始化一个client，比如调用账号相关，通过client来发起请求。

 ```php
	use client\Client;use client\UserClient;use constants\OpenApiConfigConstants;$userClient = new UserClient(
            new Client(
                OpenApiConfigConstants::APP_ID,
                OpenApiConfigConstants::APP_SECRET,
                OpenApiConfigConstants::SERVICE_URL));

  ```

- 获取个人用户授权接口示例

```php
	use FddCloud\bean\req\user\GetUserAuthUrlReq;
	$getUserAuthUrlReq = new GetUserAuthUrlReq();
	$getUserAuthUrlReq->setClientUserId("xxxxx");
    $getUserAuthUrlReq->setAccountName("185*******2");
	$response = $userClient->getUserAuthUrl($accessToken,$getUserAuthUrlReq);
    print_r($response."\n");
```



# 版本更新日志

https://dev.fadada.com/updata-log/



# 参考

FASC OpenAPI (服务端) 接口文档 v5.1

https://dev.fadada.com/api-doc/ALGPB7Z1FD/TA0WHTSXQYL0NQRB/5-1

