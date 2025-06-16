<?php

namespace FddCloud\utils\crypt;
class FddCryptUtil
{


    public function signature($timestamp, $appSecret, $values)
    {
        $keys = array_keys($values);
        array_multisort($keys, SORT_ASC, SORT_STRING);
        $sortParam = $this->arrayParamToStr($values, $keys);
        //计算签名
        $signText = strtolower(hash("sha256", $sortParam));
        $hash = hash_hmac("sha256", $timestamp, $appSecret, true);
        $sign = hash_hmac("sha256", $signText, $hash);
        return $sign;
    }

    private function arrayParamToStr($array, $keys)
    {
        $Str = "";
        foreach ($keys as $k => $v) {
            if (!empty($array[$v])) {
                $Str .= $v . "=" . $array[$v] . "&";
            }
        }
        return trim($Str, "&");
    }

    public function msectime()
    {
        list($msec, $sec) = explode(' ', microtime());
        $msectime = (float)sprintf('%.0f', (floatval($msec) + floatval($sec)) * 1000);
        return $msectime;
    }

    public function imgToBase64($img_file) {
        $img_base64 = '';
        if (file_exists($img_file)) {
            $app_img_file = $img_file; // 图片路径

            $fp = fopen($app_img_file, "r"); // 图片是否可读权限
            if ($fp) {
                $filesize = filesize($app_img_file);
                $content = fread($fp, $filesize);
                $file_content = chunk_split(base64_encode($content)); // base64编码
                $img_base64 = $file_content;//合成图片的base64编码
            }
            fclose($fp);
        }
        return $img_base64; //返回图片的base64
    }
}
