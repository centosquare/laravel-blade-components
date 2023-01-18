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
        Blade::component('laravel-blade-components::components.dash.layout.footer', 'dash.layout.footer');
        Blade::component('laravel-blade-components::components.dash.toolbar.index', 'dash.toolbar');
        Blade::component('laravel-blade-components::components.dash.breadcrumb.index', 'dash.breadcrumb');
        Blade::component('laravel-blade-components::components.dash.anchor.btn', 'dash.anchor.btn');

        Blade::component('laravel-blade-components::components.dash.heading.title', 'dash.heading.title');
        Blade::component('laravel-blade-components::components.dash.heading.subtitle', 'dash.heading.subtitle');

        Blade::component('laravel-blade-components::components.dash.row.index', 'dash.row');
        Blade::component('laravel-blade-components::components.dash.col.index', 'dash.col');
        Blade::component('laravel-blade-components::components.dash.form.index', 'dash.form');
        Blade::component('laravel-blade-components::components.dash.form.input', 'dash.form.input');
        Blade::component('laravel-blade-components::components.dash.form.select', 'dash.form.select');

        Blade::component('laravel-blade-components::components.dash.div.index', 'dash.div');

        Blade::component('laravel-blade-components::components.dash.error.index', 'dash.error');

        Blade::component('laravel-blade-components::components.dash.btn.index', 'dash.btn');

        Blade::component('laravel-blade-components::components.dash.examples.left_sidebar', 'dash.examples.left_sidebar');
        Blade::component('laravel-blade-components::components.dash.nav.index', 'dash.nav');
        Blade::component('laravel-blade-components::components.dash.nav.tree', 'dash.nav.tree');
        Blade::component('laravel-blade-components::components.dash.icons.dashboard', 'dash.icons.dashboard');
        Blade::component('laravel-blade-components::components.dash.nav.sub-item', 'dash.nav.sub-item');
        Blade::component('laravel-blade-components::components.dash.nav.item', 'dash.nav.item');

        Blade::component('laravel-blade-components::components.dash.table.index', 'dash.table');
        Blade::component('laravel-blade-components::components.dash.table.th', 'dash.table.th');

        Blade::component('laravel-blade-components::components.dash.form.index', 'dash.form');
        Blade::component('laravel-blade-components::components.dash.form.input', 'dash.form.input');
        Blade::component('laravel-blade-components::components.dash.form.textarea', 'dash.form.textarea');
        Blade::component('laravel-blade-components::components.dash.form.dropdown', 'dash.form.dropdown');
        Blade::component('laravel-blade-components::components.dash.form.media', 'dash.form.media');

        Blade::component('laravel-blade-components::components.dash.card.index', 'dash.card');
        Blade::component('laravel-blade-components::components.dash.card.header', 'dash.card.header');
        Blade::component('laravel-blade-components::components.dash.card.body', 'dash.card.body');
        Blade::component('laravel-blade-components::components.dash.card.footer', 'dash.card.footer');

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
