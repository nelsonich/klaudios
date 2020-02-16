<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use App\Helpers\TextLimit;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // foreach( glob (app_path().'/Helpers/*.php' ) as $filename ) // register all helpers
        // {
        //     require_once($filename);
        // }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
