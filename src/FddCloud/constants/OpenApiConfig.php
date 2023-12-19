<?php

namespace FddCloud\constants;

class OpenApiConfig
{
    /**
     * 接口请求域名
     *
     * 生产环境域名：https://api.fadada.com/api/v5/
     * 开发环境域名：https://uat-api.fadada.com/api/v5/
     *
     */
    private static $service_url = "https://api.fadada.com/api/v5/";

    /**
     * 应用appid
     */
    private static $app_id = "";

    /**
     * 应用秘钥
     */
    private static $app_secret = "";

    private static $debug = true;

    /**
     * @param $service_url
     * @param $app_id
     * @param $app_secret
     */
    public function __construct($service_url,$app_id,$app_secret)
    {
        self::$service_url = $service_url;
        self::$app_id = $app_id;
        self::$app_secret = $app_secret;
    }

    public static function init($service_url,$app_id,$app_secret)
    {
        self::$service_url = $service_url;
        self::$app_id = $app_id;
        self::$app_secret = $app_secret;
    }

    public static function getServiceUrl()
    {
        return self::$service_url;
    }

    public static function setServiceUrl($service_url)
    {
        self::$service_url = $service_url;
    }

    public static function getAppId()
    {
        return self::$app_id;
    }

    public static function setAppId($app_id)
    {
        self::$app_id = $app_id;
    }

    public static function getAppSecret()
    {
        return self::$app_secret;
    }

    public static function setAppSecret($app_secret)
    {
        self::$app_secret = $app_secret;
    }

    public static function isDebug()
    {
        return self::$debug;
    }

    public static function setDebug($debug)
    {
        self::$debug = $debug;
    }

}
