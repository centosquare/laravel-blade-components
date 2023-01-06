<?php
namespace CentoSquare\LaravelBladeComponents;

use Illuminate\Support\ServiceProvider;

class LaravelBladeComponentsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__. '/views','laravel-blade-components');

        $this->publishes([
            __DIR__.'/views' => resource_path('views'),
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {

    }
}
