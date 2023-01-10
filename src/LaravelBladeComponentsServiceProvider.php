<?php
namespace CentoSquare\LaravelBladeComponents;

use Illuminate\Support\Facades\Blade;
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

        Blade::component('laravel-blade-components::components.dash.layout.master', 'dash.layout.master');
        Blade::component('laravel-blade-components::components.dash.layout.header', 'dash.layout.header');
        Blade::component('laravel-blade-components::components.dash.layout.left_sidebar', 'dash.layout.left_sidebar');
        Blade::component('laravel-blade-components::components.dash.nav.index', 'dash.nav.index');
        Blade::component('laravel-blade-components::components.dash.nav.tree', 'dash.nav.tree');
        Blade::component('laravel-blade-components::components.dash.icons.dashboard', 'dash.icons.dashboard');
        Blade::component('laravel-blade-components::components.dash.nav.sub-item', 'dash.nav.sub-item');
        Blade::component('laravel-blade-components::components.dash.nav.item', 'dash.nav.item');

        Blade::component('laravel-blade-components::components.dash.table.index', 'dash.table.index');
        Blade::component('laravel-blade-components::components.dash.table.th', 'dash.table.th');

        Blade::component('laravel-blade-components::components.dash.form.index', 'dash.form.index');
        Blade::component('laravel-blade-components::components.dash.form.input', 'dash.form.input');
        Blade::component('laravel-blade-components::components.dash.form.textarea', 'dash.form.textarea');
        Blade::component('laravel-blade-components::components.dash.form.dropdown', 'dash.form.dropdown');

        Blade::component('laravel-blade-components::components.dash.card.index', 'dash.card.index');


        $this->publishes([
            __DIR__.'/views' => resource_path('views'),
        ]);

        // Blade::component('dash/layout/header');
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
