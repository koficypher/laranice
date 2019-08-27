<?php

namespace KofiCypher\Laranice;

use Laranice\Preset;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;

class LaraniceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        PresetCommand::macro('nice-admin',function($command){
            Preset::install();
        });
    }
}
