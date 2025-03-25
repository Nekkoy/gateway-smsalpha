<?php

namespace Nekkoy\GatewaySmsalpha\Services;

use Nekkoy\GatewaySmsalpha\DTO\ConfigDTO;

/**
 *
 */
class GatewayService
{
    protected $config;

    public function __construct()
    {
        $this->config = config('gateway-smsalpha', []);
    }

    /**
     * @return ConfigDTO
     */
    public function getConfig()
    {
        return new ConfigDTO($this->config);
    }
}
