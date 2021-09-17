<?php

namespace App\Providers;

use App\helper\Cart;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\ext\DatabaseSessionHandler;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton( 'Cart' , function(){
            return new \App\helper\CartService() ;
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Session::extend('NAME_YOU_WANT', function ($app) {
            $table   = config('session.table');
            $minutes = config('session.lifetime');

            return new DatabaseSessionHandler($this->getDatabaseConnection(), $table, $minutes, $app);
        });


        View::composer('*', function ($view) {
            $view->with( ['sum_cart' => \App\helper\Cart::sum()]);
        });


    }

    protected function getDatabaseConnection()
    {
        $connection = config('session.connection');

        return \DB::connection($connection);
    }
}
