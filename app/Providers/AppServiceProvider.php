<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Products;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('include.footer', function($view){

            //get api content            
            //$contents = json_decode(file_get_contents('https://newsapi.org/v2/top-headlines?country=tr&category=entertainment&pageSize=5&apiKey=e773f762c809423eae750354d71aaeb7'), true);

            $view->with('news', Products::all());
        });
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
