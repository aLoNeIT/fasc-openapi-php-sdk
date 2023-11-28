<?php

namespace FddCloud\constants;

class OpenApiConfigConstants
{
    /**
     * 接口请求域名
     *
     * 生产环境域名：https://api.fadada.com/api/v5/
     * 开发环境域名：https://uat-api.fadada.com/api/v5/
     *
     */
    const SERVICE_URL = "https://uat-api.fadada.com/api/v5/";

//    const SERVICE_URL = "https://sit-api.fadada.com/api/v5/";
//    const SERVICE_URL = "http://127.0.0.1:8013/api/v5/v2"; //本地

    /**
     * 应用appid
     */
    const APP_ID = "00000199";
//    const APP_ID = "00000385"; //sit
//    const APP_ID = "00000535";

    /**
     * 应用秘钥
     */
    const APP_SECRET = "JTYPDTNO2J9N0KLY6ZWBQ7SJUKGBHYSK";

//    const APP_SECRET = "5V8D3QQLCTUEEWE8VAH5K2UNXACXF9KQ"; //sit

//    const APP_SECRET = "KFUQIW6IOKDMJT1XGEFGBF1GDZI8TSTM";

    const DEBUG = false;
}
