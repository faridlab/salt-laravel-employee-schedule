<?php

namespace SaltEmployeeSchedule\Providers;

use Illuminate\Support\ServiceProvider;

class SaltEmployeeScheduleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Config
         *
         * Uncomment this function call to make the config file publishable using the 'config' tag.
         */
        $this->publishes([
            __DIR__.'/../../config/employee-schedule.php' => config_path('employee-schedule.php'),
        ], 'employee-schedule-config');

        /**
         * Routes
         *
         * Uncomment this function call to load the route files.
         * A web.php file has already been generated.
         */
        // $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
        $this->loadRoutesFrom(__DIR__.'/../../routes/api.php');

        /**
         * Translations
         *
         * Uncomment the first function call to load the translations.
         * Uncomment the second function call to load the JSON translations.
         * Uncomment the third function call to make the translations publishable using the 'translations' tag.
         */
        // $this->loadTranslationsFrom(__DIR__.'/../../resources/lang', 'employee-schedule');
        // $this->loadJsonTranslationsFrom(__DIR__.'/../../resources/lang', 'employee-schedule');
        // $this->publishes([
        //     __DIR__.'/../../resources/lang' => resource_path('lang/vendor/employee-schedule'),
        // ], 'translations');

        /**
         * Views
         *
         * Uncomment the first section to load the views.
         * Uncomment the second section to make the view publishable using the 'view' tags.
         */
        // $this->loadViewsFrom(__DIR__.'/../../resources/views', 'employee-schedule');
        // $this->publishes([
        //     __DIR__.'/../../resources/views' => resource_path('views/vendor/employee-schedule'),
        // ], 'views');

        /**
         * Commands
         *
         * Uncomment this section to load the commands.
         * A basic command file has already been generated in 'src\Console\Commands\MyPackageCommand.php'.
         */
        // if ($this->app->runningInConsole()) {
        //     $this->commands([
        //         \SaltEmployeeSchedule\Console\Commands\SaltEmployeeScheduleCommand::class,
        //     ]);
        // }

        /**
         * Public assets
         *
         * Uncomment this functin call to make the public assets publishable using the 'public' tag.
         */
        // $this->publishes([
        //     __DIR__.'/../../public' => public_path('vendor/employee-schedule'),
        // ], 'public');

        /**
         * Migrations
         *
         * Uncomment the first function call to load the migrations.
         * Uncomment the second function call to make the migrations publishable using the 'migrations' tags.
         */
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
        $this->publishes([
            __DIR__.'/../../database/migrations/' => database_path('migrations')
        ], 'employee-schedule-migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        /**
         * Config file
         *
         * Uncomment this function call to load the config file.
         * If the config file is also publishable, it will merge with that file
         */
        // $this->mergeConfigFrom(
        //     __DIR__.'/../../config/employee-schedule.php', 'employee-schedule'
        // );
    }
}
