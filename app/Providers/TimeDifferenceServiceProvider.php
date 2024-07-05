<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\TimeDifferenceService;

class TimeDifferenceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Register the TimeDifferenceService as a singleton
        $this->app->singleton(TimeDifferenceService::class, function ($app) {
             return new TimeDifferenceService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
