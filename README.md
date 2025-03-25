# gateway-letsads
SMS Gateway для сервиса [alphasms.ua](https://alphasms.ua) ( [alphasms.net](https://alphasms.net) )

Установка:
```
composer require nekkoy/gateway-smsalpha
```

Конфигурация `.env`
===============
```
# Включить/выключить модуль
SMSALPHA_ENABLED=true

# Ключь API
SMSALPHA_API_KEY=

# Канал для отправки (sms/viber)
SMSALPHA_CHANNEL=sms

# Имя отправителя в СМС
SMSALPHA_SMS_NAME=

# Имя отправителя в Viber
SMSALPHA_VIBER_NAME=

# Значение 1 (если переотправлять сообщение по SMS в случае невозможности доставить через Viber)
SMSALPHA_RESEND_IF_VIBER_FAIL=0
```

Использование
===============

Создайте DTO сообщения, передав первым параметром текст, а вторым — номер получателя:
```
$message = new \Nekkoy\GatewayAbstract\DTO\MessageDTO("test", "+380123456789");
```

Затем вызовите метод отправки сообщения через фасад:
```
/** @var \Nekkoy\GatewayAbstract\DTO\ResponseDTO $response */
$response = \Nekkoy\GatewaySmsalpha\Facades\GatewaySmsalpha::send($message);
```

Метод возвращает DTO-ответ с параметрами:
 - message - сообщение об успешной отправке или ошибке
 - code - код ответа:
   - code < 0 - ошибка модуля
   - code > 0 - ошибка HTTP
   - code = 0 - успех
 - id - ID сообщения
