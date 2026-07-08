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
        if(env('APP_ENV') !== 'local' || env('APP_ENV') === 'local') { // Force on live, but since their .env on Hostinger might be 'local', let's just force it if the scheme isn't specifically disabled. Let's just force it.
            \Illuminate\Support\Facades\URL::forceScheme('https');
        }
    }
}
