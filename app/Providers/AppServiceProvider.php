<?php

namespace App\Providers;

use App\Models\Particular;
use App\Observers\ParticularObserver;
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
        Particular::observe(ParticularObserver::class); 
    }
}
