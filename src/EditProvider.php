<?php

namespace Atin\LaravelEdit;

use Illuminate\Support\ServiceProvider;

class EditProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-edit');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-edit')
        ], 'laravel-edit-views');
    }
}