<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PageContentProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Helper', function($app){
            return new \App\Helpers\Helper();
        });
    }
}