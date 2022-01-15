<?php

namespace Customers\Providers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class CustomerServiceProvider extends ServiceProvider
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
        $moduleName = basename(dirname(__DIR__,'1'));
        config([
                   $moduleName => File::getRequire(loadConfigFile('route', $moduleName))
               ]);
        $this->loadRoutesFrom(loadRoutes('web', $moduleName));
        $this->loadViewsFrom(loadViews($moduleName), $moduleName);
        $this->loadTranslationsFrom(loadLang($moduleName), $moduleName);
        $this->loadMigrationsFrom(loadMigrations($moduleName));
        $this->loadJsonTranslationsFrom(loadTranslationJson($moduleName));
    }
}
