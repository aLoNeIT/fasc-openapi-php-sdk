<?php

namespace FddCloud\utils\crypt;
class FddCryptUtil
{


    public function signature($timestamp, $appSecret, $values)
    {
        $keys = array_keys($values);
        array_multisort($keys, SORT_ASC, SORT_STRING);
        $sortParam = $this->arrayParamToStr($values, $keys);
//        print_r($sortParam."\n");
        //计算签名
        $signText = strtolower(hash("sha256", $sortParam));
        $hash = hash_hmac("sha256", $timestamp, $appSecret, true);
        return hash_hmac("sha256", $signText, $hash);
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
}
