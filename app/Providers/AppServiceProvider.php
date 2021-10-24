<?php

namespace App\Providers;

use App\Services\LineMessagingApiService;
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
        // インスタンス生成時、access_tokenやchannel_secretを設定
        $this->app->bind(LineMessagingApiService::class, function () {
            return new LineMessagingApiService(
                config('line.access_token'), config('line.channel_secret')
            );
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (\App::environment('production')) {
            \URL::forceScheme('https');
        }
    }
}
