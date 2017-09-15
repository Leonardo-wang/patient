<?php

namespace Leonardo\PatientManager;

use Illuminate\Support\ServiceProvider;

class PatientManagerProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/patient/Routes/patient.php');

        // Load views
        $this->loadViewsFrom(__DIR__ . '/patient/views', 'patient');

        // Publish assets
        $this->publishes([
            __DIR__ . '/patient/assets' => public_path('assets'),
        ], 'patient');

        // Publish Views
        $this->publishes([
            __DIR__.'/patient/views' => resource_path('views/patient'),
        ], 'patient.views');

        // Publish config
        $this->publishes([
            __DIR__.'/patient/config/patient.php' => config_path('patient.php'),
        ], 'patient.views');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
