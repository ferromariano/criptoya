<?php

namespace CriptoYa\lib;

use CriptoYa\ApiClient;
use CriptoYa\config\exchangesConfig;

class exchange
{
    /**
     * @var string
     */
    private $keyName = '';

    /**
     * @var ApiClient
     */
    private $ApiClient;

    /**
     * @var array
     */
    private $config;

    public function __construct(string $keyName, ApiClient $apiClient = null)
    {
        $this->keyName = $keyName;

        if ($apiClient instanceof ApiClient) {
            $this->ApiClient = $apiClient;
        } else {
            $this->ApiClient = new ApiClient();
        }
    }

    public function getKeyName(): string
    {
        return $this->keyName;
    }

    public function getName(): string
    {
        return $this->getConfig('name');
    }

    public function getCoins(): array
    {
        return $this->getConfig('coin');
    }

    public function getFiats(): array
    {
        return $this->getConfig('fiat');
    }

    public function getConfig($k)
    {
        if ($this->config == null) {
            $this->config = exchangesConfig::getConfig($this->getKeyName());
        }

        return $this->config[$k];
    }
}
