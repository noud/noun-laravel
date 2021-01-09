<?php

namespace Inflector\API\Providers;

use API\Platform\Console\Commands\Generate;
use Illuminate\Support\ServiceProvider;

class InflectorAPIServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Generate::class,
            ]);
        }

        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations/2022_08_28_214054_create_tables_table.php');
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
    }
}
