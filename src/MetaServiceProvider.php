<?php

namespace Kalinkin\Meta;

use Illuminate\Support\ServiceProvider;

class MetaServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->app->singleton('meta', function ($app) {
            $meta = new MetaService('test');

            return $meta;
        });
    }
}