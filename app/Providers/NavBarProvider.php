<?php

namespace App\Providers;

use App\Modules\NavBar;
use Illuminate\Support\ServiceProvider;

class NavBarProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('App\Modules\NavBarInterface', function () {
            return new NavBar();
        });
    }
}
