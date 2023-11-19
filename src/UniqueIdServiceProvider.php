<?php
namespace CoderOrbit\LaravelUniqueId;

use Illuminate\Support\ServiceProvider;

class UniqueIdServiceProvider extends ServiceProvider {


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('unique-id', function($app) {

            return new \CoderOrbit\LaravelUniqueId\UniqueId();
        });
    }


    /**
     * Register any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

}