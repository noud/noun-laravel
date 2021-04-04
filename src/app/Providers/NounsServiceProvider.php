<?php

namespace Nouns\Providers;

use Illuminate\Support\ServiceProvider;

class NounsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../../routes/api.php');
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');

        $this->publishes([
            __DIR__.'/../../config/nouns-laravel.php' => config_path('nouns-laravel.php'),
        ]);
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'nouns-laravel');
    }
}
