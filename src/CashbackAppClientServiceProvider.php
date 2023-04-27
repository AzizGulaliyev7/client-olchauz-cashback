<?php

namespace Olchauz\CashbackAppClient;

use Illuminate\Support\ServiceProvider;

class CashbackAppClientServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'olchauz');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'olchauz');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/cashbackappclient.php', 'cashbackappclient');

        // Register the service the package provides.
        $this->app->singleton('cashbackappclient', function ($app) {
            return new CashbackAppClient;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['cashbackappclient'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/cashbackappclient.php' => config_path('cashbackappclient.php'),
        ], 'cashbackappclient.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/olchauz'),
        ], 'cashbackappclient.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/olchauz'),
        ], 'cashbackappclient.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/olchauz'),
        ], 'cashbackappclient.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
