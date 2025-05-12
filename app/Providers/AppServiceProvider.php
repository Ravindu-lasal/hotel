<?php

namespace App\Providers;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    // Only force HTTPS if not in local environment
    if (env('APP_ENV') !== 'local') {
        // Trust the proxy (if you're behind a load balancer like DigitalOcean App Platform)
        Request::setTrustedProxies(
            [Request::getClientIp()],
            Request::HEADER_X_FORWARDED_ALL
        );

        // Force HTTPS
        URL::forceScheme('https');
    }
}
