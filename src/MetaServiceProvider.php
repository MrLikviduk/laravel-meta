<?php

namespace Kalinkin\Meta;

use App\Jobs\SendRegistrationMail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\ServiceProvider;

class MetaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Event::listen(Registered::class, function ($event) {
            Queue::push(new SendRegistrationMail($event->user));
        });
    }

    public function register()
    {
        $this->app->singleton('meta', function ($app) {
            $meta = new MetaService('test');

            return $meta;
        });
    }
}