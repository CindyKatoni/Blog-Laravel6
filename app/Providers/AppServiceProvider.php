<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        // app()->bind('App\Example', function () {
        //     $collaborator = new \App\Collaborator();
        //     $foo = 'foobar';
        
        //     return new \App\Example($collaborate, $foo);
        // });
        
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
