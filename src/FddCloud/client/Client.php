<?php


namespace FddCloud\client;

use Exception;
use FddCloud\utils\log\SdkLog;


date_default_timezone_set('PRC'); //其中PRC为“中华人民共和国”

class Client implements IClient
{

    private $appId;
    private $appSecret;
    private $url;
    private $timeout = 60;
    private $debug = false;

    public function __construct($appId, $appSecret, $url, $timeout, $debug)
    {
        $this->appId = $appId;
        $this->appSecret = $appSecret;
        $this->url = $url;
        $this->timeout = $timeout;
        $this->debug = $debug;
    }

    /**
     * @throws Exception
     */
    public function request_file($url, $filePath)
    {
        $filePath = iconv('utf-8', 'gbk', $filePath);
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => $this->timeout,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => file_get_contents($filePath),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/octet-stream'
            ),
        ));
        $output = curl_exec($curl);
        $error = curl_errno($curl);
        if ($error) {
            throw new exception("请求发生异常情况" . curl_strerror($error));
        }
        $curlInfo = curl_getinfo($curl);
        curl_close($curl);
        if ($curlInfo['http_code'] == 200) {
            return $output;
        } else {
            throw new exception("文件上传失败");
        }
    }

    public function downLoad_request($accessToken, $bizContent, $path)
    {
        //随机数
        $nonce = md5(uniqid(\str_pad(\random_int(0, 10000000), 8, '0', STR_PAD_LEFT), true));
        $headers = $this->getHeader($nonce, $bizContent, $accessToken);
        $headers['Content-type'] = "application/x-www-form-urlencoded;charset=UTF-8";
        $postHeader = $this->toPost($headers);
        print_r($headers);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url . $path);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $this->timeout);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $postHeader);
        // 返回 response_header, 该选项非常重要,如果不为 true, 只会获得响应的正文
        curl_setopt($ch, CURLOPT_HEADER, true);
        // 是否不需要响应的正文,为了节省带宽及时间,在只需要响应头的情况下可以不要正文
        //        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        $body = array();
        $body['bizContent'] = $bizContent;
        print_r($body);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($body));
        $response = curl_exec($ch);
        $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        curl_close($ch);
        $header = substr($response, 0, $headerSize);
        $body = substr($response, $headerSize);
        print_r($header . "\n");
        $headerArray = explode("\r\n", $header);
        $downLoadInfo = array();
        $downLoadInfo['body'] = $body;
        foreach ($headerArray as $loop) {
            if (strpos($loop, "Content-Type") !== false) {
                $contentType = trim(substr($loop, 13));
                $downLoadInfo['contentType'] = $contentType;
            }
        }

        return $downLoadInfo;
    }


    public function request($accessToken, $bizContent, $path)
    {
        //判断curl版本是否大于7.40.0
        $isContentLength = $this->checkCurlVersion();
        //随机数
        $nonce = md5(uniqid(\str_pad(\random_int(0, 10000000), 8, '0', STR_PAD_LEFT), true));
        $headers = $this->getHeader($nonce, $bizContent, $accessToken);
        $headers['Content-type'] = "application/x-www-form-urlencoded";
        //debug调试打印
        SdkLog::debug(__FUNCTION__ . ':request', [
            'header' => $headers,
            'body' => $bizContent
        ], $this->debug);

        $ch = curl_init();

        //判断是否是获取accessToken
        if (!is_null($bizContent)) {
            $body = array();
            $body['bizContent'] = $bizContent;
            $content = http_build_query($body);
            //是否自动计算Content-Length
            $isContentLength ? $headers['Content-Length'] = strlen($content) : print_r("");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
        } else {
            //是否自动计算Content-Length
            $isContentLength ? $headers['Content-Length'] = 0 : print_r("");
        }
        curl_setopt($ch, CURLOPT_URL, $this->url . $path);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $this->timeout);
        //        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->toPost($headers));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_HEADER, true);      // 需要响应头


        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);

        $response = curl_exec($ch);
        // 检查是否有错误发生
        if (curl_errno($ch)) {
            echo 'cURL error: ' . curl_error($ch);
        }
        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $header = substr($response, 0, $header_size); // 获取响应头部分
        $body = substr($response, $header_size);       // 获取响应体部分
        SdkLog::debug(__FUNCTION__ . ':response', [
            'header' => $headers,
            'body' => $body
        ], $this->debug);
        curl_close($ch);
        return $body;
    }

    public function toPost(array $params = array(), $pre = '')
    {
        $result = array();
        foreach ($params as $k => $v) {
            $result[] = $k . ": " . $v;
        }
        return $result;
    }

    private function getHeader($nonce, $bizContent, $accessToken)
    {
        //组装需要去计算签名的参数
        //		$date = date("Y-m-d H:i:s").".000";
        $date = $this->msectime();
        $values = array();
        $values['X-FASC-App-Id'] = $this->appId;
        $values['X-FASC-Timestamp'] = $date;
        $values['X-FASC-Sign-Type'] = "HMAC-SHA256";
        $values['X-FASC-Nonce'] = $nonce;
        $values['X-FASC-Api-SubVersion'] = "5.1";
        if (is_null($accessToken)) {
            $values['X-FASC-Grant-Type'] = "client_credential";
        } else {
            $values['X-FASC-AccessToken'] = $accessToken;
            $values['bizContent'] = $bizContent;
        }
        //得到排序后的字符串
        $keys = array_keys($values);
        array_multisort($keys, SORT_ASC, SORT_STRING);
        $sortParam = $this->arrayParamToStr($values, $keys);
        //计算签名
        $signText = strtolower(hash("sha256", $sortParam));
        $hash = hash_hmac("sha256", $date, $this->appSecret, true);
        $sign = hash_hmac("sha256", $signText, $hash);

        //返回header数组
        if (!is_null($accessToken)) {
            $values = $this->removeKey($values, "bizContent");
        }
        $values['X-FASC-Sign'] = $sign;
        return $values;
    }

    private function arrayParamToStr($array, $keys)
    {
        $Str = "";
        foreach ($keys as $k => $v) {
            $Str .= $v . "=" . $array[$v] . "&";
        }
        return trim($Str, "&");
    }


    private function removeKey($data, $key)
    {
        if (!array_key_exists($key, $data)) {
            return $data;
        }
        $keys = array_keys($data);
        $index = array_search($key, $keys);
        if ($index !== FALSE) {
            array_splice($data, $index, 1);
        }
        return $data;
    }

    private function msectime()
    {
        list($msec, $sec) = explode(' ', microtime());
        return (float)sprintf('%.0f', (floatval($msec) + floatval($sec)) * 1000);
    }

    private function checkCurlVersion()
    {
        $curlVersion = curl_version();
        // 判断版本信息
        if (version_compare($curlVersion['version'], '7.40', '>')) {
            return false;
        } else {
            echo "当前CURL版本号是" . $curlVersion['version'] . "小于 7.40,建议尽快进行升级\n";
            return true;
        }
    }
}
