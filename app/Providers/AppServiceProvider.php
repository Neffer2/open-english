<?php

namespace App\Providers;

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
        $this->app->singleton('paises', function () {
            return config('paises');
        });
    }

    //$this->ciudades = app('paises');
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        config(['paises' => [
            'Argentina', 'Bolivia', 'Chile', 'Colombia', 'Costa Rica', 'Ecuador', 'España',
            'EEUU', 'Guatemala', 'México', 'Perú', 'República Dominicana', 'Uruguay'
        ]]);
    }
}
