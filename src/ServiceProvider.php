<?php

namespace Ambiene\SecureHeaders;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->publishes(
            [
                __DIR__ . "/../config/secure-headers.php" => config_path(
                    "secure-headers.php"
                ),
            ],
            "config"
        );
    }
}
