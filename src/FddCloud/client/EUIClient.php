<?php

namespace FddCloud\client;

use FddCloud\bean\req\bill\GetBillListReq;
use FddCloud\bean\req\bill\GetBillSummaryListReq;
use FddCloud\bean\req\bill\GetBillUrlReq;
use FddCloud\bean\req\bill\GetOrderDetailReq;
use FddCloud\bean\req\bill\GetUsageAvailablenumReq;
use FddCloud\bean\req\bill\GetUsageListReq;
use FddCloud\bean\req\eui\AppPageResourceUrlReq;
use FddCloud\bean\req\eui\UserPageResourceUrlReq;
use FddCloud\constants\OpenApiUrlConstants;


class EUIClient
{
    private $client;

    public function __construct(IClient $client)
    {
        $this->client = $client;
    }


    # 获取应用级资源访问链接

    /**
     * @param $accessToken
     * @param AppPageResourceUrlReq $req
     * @return mixed
     * @deprecated 5.3.0.0824 弃用方法
     */
    function getAppPageResourceUrl($accessToken, AppPageResourceUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::APP_PAGE_RESOURCE_GET_URL);
    }

    # 获取用户级资源访问链接

    /**
     * @param $accessToken
     * @param UserPageResourceUrlReq $req
     * @return mixed
     * @deprecated 5.3.0.0824 弃用方法
     */
    function getUserPageResourceUrl($accessToken, UserPageResourceUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::USER_PAGE_RESOURCE_GET_URL);
    }

    # 获取计费链接
    function get_bill_url($accessToken, GetBillUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::BILLING_GET_BILL_URL);
    }

    # 查询订单详情
    function getOrderDetail($accessToken, GetOrderDetailReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::BILL_ACCOUNT_GET_ORDER_DETAIL);
    }

    # 查询账户可用余量
    function getUsageAvailablenum($accessToken, GetUsageAvailablenumReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::BILLING_ACCOUNT_GET_USAGE_AVAILABLENUM);
    }

    # 查询已购消耗类产品
    function getUsageList($accessToken, GetUsageListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::BILL_ACCOUNT_GET_USAGE_LIST);
    }

    # 查询使用汇总数据
    function getBillSummaryList($accessToken, GetBillSummaryListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::BILL_ACCOUNT_GET_BILL_SUMMARY_LIST);
    }

    # 查询计费流水记录
    function getBillList($accessToken, GetBillListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::BILL_ACCOUNT_GET_BILL_LIST);
    }


}
