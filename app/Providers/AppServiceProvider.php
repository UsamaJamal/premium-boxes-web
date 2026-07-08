<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (!request()->isSecure() && !in_array(request()->getHost(), ['localhost', '127.0.0.1'])) {
            \Illuminate\Support\Facades\URL::forceScheme('https');
        }
    }
}
