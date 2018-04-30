<?php

namespace LaPress\Config;

use Illuminate\Support\ServiceProvider;
/**
 * @author    Sebastian Szczepański
 * @copyright ably
 */
class ConfigServiceProvider extends ServiceProvider
{
    const CONFIGS = [
        'wordpress',
    ];
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        foreach (static::CONFIGS as $config) {
            $this->mergeConfigFrom(__DIR__.'/config/'.$config.'.php', $config);
        }
    }
}
