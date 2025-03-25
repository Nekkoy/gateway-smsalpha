<?php

namespace Nekkoy\GatewaySmsalpha;

use Illuminate\Support\ServiceProvider;

/**
 *
 */
class SmsalphaServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(\Nekkoy\GatewaySmsalpha\Services\GatewayService::class, function ($app) {
            return new \Nekkoy\GatewaySmsalpha\Services\GatewayService();
        });

        $this->app->singleton('gateway-smsalpha', function ($app) {
            return new \Nekkoy\GatewaySmsalpha\Services\GatewaySmsalphaService();
        });
    }

    public function boot()
    {
        $this->publishes([__DIR__ . '/../config/config.php' => config_path('gateway-smsalpha.php')], 'config');
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'gateway-smsalpha');
    }
}
