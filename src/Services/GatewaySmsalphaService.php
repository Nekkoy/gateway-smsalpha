<?php

namespace Nekkoy\GatewaySmsalpha\Services;

use Nekkoy\GatewaySmsalpha\DTO\ConfigDTO;
use Nekkoy\GatewayAbstract\DTO\MessageDTO;
use Nekkoy\GatewayAbstract\DTO\ResponseDTO;

/**
 *
 */
class GatewaySmsalphaService
{
	/**
	* @return ResponseDTO
	*/
    public function send(MessageDTO $message)
    {
        /** @var ConfigDTO $config */
        $config = app(GatewayService::class)->getConfig();

        /** @var SendMessageService $gateway */
        $gateway = new $config->handler($config, $message);

        return $gateway->send();
    }
}
