<?php

namespace Vafa\Packagelearn\Provider;

use Illuminate\Support\ServiceProvider;

class PackagelearnServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('packagelearn', function(){
            return new Project;
        });
    }

    public function boot()
    {

        require __DIR__. '\..\Http\routes.php';

        $this->publishes([
            __DIR__.'\..\Configs\main.php' => config_path('packagelearn.php'),
        ], 'config');
        
        $this->publishes([
            __DIR__.'\..\Migrations' => database_path('/migrations'),
        ], 'migrations');

        $this->publishes([
            __DIR__.'\..\Views' => base_path('resources/views/vendor/packagelearn'),
        ], 'views');

        // $this->publishes([
        //     __DIR__.'\..\Configs\main.php' => config_path('packagelearn.php'),
        //     __DIR__.'\..\Migrations' => database_path('/migrations'),
        //     __DIR__.'\..\Views' => base_path('resources/views/vendor/cms'),
        // ]);
    }

}