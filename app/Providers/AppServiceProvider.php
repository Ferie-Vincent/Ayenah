<?php

namespace App\Providers;

use App\Models\Message;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->commands([
            \App\Console\Commands\GenerateSitemap::class,
        ]);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer(['layout.*', 'admin.*'], function ($view) {
            $total = Cache::remember('total_unread_messages', 300, function () {
                return Message::where('status', 0)->count();
            });
            $view->with('total_messages', $total);
        });
    }
}
