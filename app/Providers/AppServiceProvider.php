<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
            'Argentina', 'Bolivia', 'Brasil', 'Chile', 'Colombia', 'Costa Rica', 'Ecuador', 'España',
            'EEUU', 'El Salvador', 'Guatemala', 'Honduras', 'México', 'Nicaragua', 'Panamá', 'Paraguay', 
            'Perú', 'Portugal', 'Puerto Rico', 'República Dominicana', 'Uruguay', 'Venezuela'
        ]]);

        Paginator::useBootstrap();
    }
}
