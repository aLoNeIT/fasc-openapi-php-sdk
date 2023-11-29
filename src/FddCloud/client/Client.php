<?php


namespace FddCloud\client;

use Exception;
use FddCloud\client\IClient;
use FddCloud\constants\OpenApiConfig;


date_default_timezone_set('PRC');//其中PRC为“中华人民共和国”

class Client implements IClient
{

    private $appId;
    private $appSecret;
    private $url;
    private $timeout;

    public function __construct($appId, $appSecret, $url, $timeout = 60)
    {
        $this->appId = $appId;
        $this->appSecret = $appSecret;
        $this->url = $url;
        $this->timeout = $timeout;
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
        $nonce = md5(time() . mt_rand(0, 1000));
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
        //随机数
        $nonce = md5(time() . mt_rand(0, 1000));
        print_r("url: " . $path . "\n");
        $headers = $this->getHeader($nonce, $bizContent, $accessToken);
        $headers['Content-type'] = "application/x-www-form-urlencoded";
        $postHeader = $this->toPost($headers);
        //	var_dump($postHeader);
        print_r("header: ");
        print_r($headers);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url . $path);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $this->timeout);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $postHeader);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        if (!is_null($bizContent)) {
            $body = array();
            $body['bizContent'] = $bizContent;
            if (OpenApiConfig::isDebug()) {
                print_r("body: ");
                print_r($body);
            }
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($body));
        }
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
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
}