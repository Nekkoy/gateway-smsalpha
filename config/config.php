<?php

return [
    "enabled" => env('SMSALPHA_ENABLED', false),
    "api_key" => env('SMSALPHA_API_KEY', ''),
    "name_sms" => env('SMSALPHA_SMS_NAME', ''),
    "name_viber" => env('SMSALPHA_VIBER_NAME', ''),
    "channel" => env('SMSALPHA_CHANNEL', 'sms'),
    "sms_on_fail" => env('SMSALPHA_RESEND_IF_VIBER_FAIL', 0),
    "priority" => env('SMSALPHA_PRIORITY', 1),
    "prefix" => env('SMSALPHA_PREFIX', "any"),
    "tags" => env('SMSALPHA_TAGS', '#smsalpha, #alpha'),
    "default" => env('SMSALPHA_DEFAULT', false),
    "devmode" => env('SMSALPHA_DEVMODE', false),
];
