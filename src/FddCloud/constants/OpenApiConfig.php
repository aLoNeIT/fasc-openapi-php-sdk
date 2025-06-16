<?php

namespace FddCloud\constants;


class OpenApiConfig
{
    protected $config;

    public function __construct($customConfigFile = null)
    {
        if ($customConfigFile && file_exists($customConfigFile)) {
            $this->config = require $customConfigFile;
        }
    }

    public function getConfig()
    {
        return $this->config;
    }

}
