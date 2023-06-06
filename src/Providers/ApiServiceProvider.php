<?php

namespace Karwan\RestAPI\Providers;

use Illuminate\Container\Container;
use Illuminate\Events\Dispatcher;
use Illuminate\Support\ServiceProvider;
use Karwan\RestAPI\Handlers\ApiExceptionHandler;
use Karwan\RestAPI\Routing\ApiResourceRegistrar;
use Karwan\RestAPI\Routing\ApiRouter;

class ApiServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../api.php' => config_path("api.php"),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerRouter();
        $this->registerExceptionHandler();

        $this->mergeConfigFrom(
            __DIR__ . '/../api.php', 'api'
        );
    }

    public function registerRouter()
    {
        $this->app->singleton(
            ApiRouter::class,
            function ($app) {
                return new ApiRouter($app->make(Dispatcher::class), $app->make(Container::class));
            }
        );

        $this->app->singleton(
            ApiResourceRegistrar::class,
            function ($app) {
                return new ApiResourceRegistrar($app->make(ApiRouter::class));
            }
        );
    }

    public function registerExceptionHandler()
    {
        $this->app->singleton(
            \Illuminate\Contracts\Debug\ExceptionHandler::class,
            ApiExceptionHandler::class
        );
    }
}
