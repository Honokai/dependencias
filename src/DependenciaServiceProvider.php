<?php

namespace TI\Dependencias;

use Illuminate\Support\ServiceProvider;

class DependenciaServiceProvider extends ServiceProvider
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
        $this->publishes([
            __DIR__.'/css_js' => public_path('dependencias/css_js'),
        ], 'dependencias-cssJs');

        $this->publishes([
            __DIR__.'/images' => public_path('dependencias/images'),
        ], 'dependencias-images');

        $this->publishes([
            __DIR__.'/paginas' => resource_path('views/dependencias'),
        ], 'dependencias-views');
    }
    
}
