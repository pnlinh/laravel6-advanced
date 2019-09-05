<?php

namespace App\Providers;

use App\Mixins\StrMixins;
use App\PostCardSendingService;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

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
     * @throws \ReflectionException
     */
    public function boot()
    {
        $this->app->singleton('PostCard', function ($app) {
            return new PostCardSendingService('us', 3, 4);
        });

        Str::mixin(new StrMixins());

        ResponseFactory::macro('errorJson', function ($message = 'Default error message') {
            return [
                'message' => $message,
                'code' => -1,
            ];
        });
    }
}
