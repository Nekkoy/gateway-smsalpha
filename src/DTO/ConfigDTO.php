<?php

namespace Nekkoy\GatewaySmsalpha\DTO;

use Nekkoy\GatewayAbstract\DTO\AbstractConfigDTO;

/**
 *
 */
class ConfigDTO extends AbstractConfigDTO
{
    /**
     * Ключь АПИ
     * @var string
     */
    public $api_key;

    /**
     * Имя при отправке через СМС
     * @var string
     */
    public $name_sms;

    /**
     * Имя при отправке через Viber
     * @var string
     */
    public $name_viber;

    /**
     * Канал отправки (sms/viber))
     * @var string
     */
    public $channel;
    /**
     * Значение 1 (если переотправлять сообщение по SMS в случае невозможности доставить через Viber)
     * @var int
     */
    public $sms_on_fail;

    /**
     * @var string
     */
    public $handler = \Nekkoy\GatewaySmsalpha\Services\SendMessageService::class;
}
