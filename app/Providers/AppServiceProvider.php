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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.app', function ($app){
            $app->with('cats', \App\Category::all());
        });

        view()->composer('layouts.app', function ($article){
            $article->with('arts', \App\Article::all());
        });
        
        
    }
}
