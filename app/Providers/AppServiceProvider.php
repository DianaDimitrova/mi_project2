<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Providers\ViewComposers\SiteComposer;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
		View::composer('*','App\Providers\ViewComposers\SiteComposer');
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
