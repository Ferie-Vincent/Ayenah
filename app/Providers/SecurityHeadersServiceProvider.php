<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SecurityHeadersServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Listen to the Preparing event to add headers to all responses
        app()->make('Illuminate\Contracts\Http\Kernel')
            ->pushMiddleware(\App\Http\Middleware\SecureHeaders::class);
    }
}
