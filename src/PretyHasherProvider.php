<?php

namespace Prety\Secret;

use Illuminate\Support\ServiceProvider;

class PretyHasherProvider extends ServiceProvider
{
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
        $this->app->singleton('pretyhasher', function () {
            return new PretyHasher();
        });
    }
}
