<?php

namespace FddCloud\utils\log;

class SdkLog
{
    /**
     * 写入调试日志到标准输出
     */
    public static function debug($message, $debug) {
        //是否开启debug模式
        if($debug){
            print_r($message);
        }
    }

    // 如果需要，你可以添加更多方法，如 info($message)，warning($message)，error($message) 等

}