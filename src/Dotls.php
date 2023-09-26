<?php

namespace Anandaerditya;

use Anandaerditya\Dotls\src\Components\ConfigReader;

class Dotls
{
    private ConfigReader $reader;

    private array $tmp_config;

    public function __construct()
    {
        $this->reader = new ConfigReader();
    }

    /**
     * @param string $filename
     * @return array
     */
    public function register(string $filename) : array
    {
        $this->tmp_config =  $this->reader->readAssoc($this->reader->prepare($filename));
        return $this->tmp_config;
    }

    public function get(string $config_key) : string
    {
        return $this->tmp_config[$config_key];
    }
}