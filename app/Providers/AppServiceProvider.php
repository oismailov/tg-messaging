<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /**
         * Bind messaging service.
         */
        $this->app->bind(Services\Messaging\Messaging::class, function () {
            return new Services\Messaging\PusherService();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
