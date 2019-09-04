<?php

namespace App\Providers;

use App\PostCardSendingService;
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
        $this->app->singleton('PostCard', function ($app) {
            return new PostCardSendingService('us', 3, 4);
        });
    }
}
