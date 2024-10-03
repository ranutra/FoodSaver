<?php

namespace App\Providers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    protected $namespace = 'App\Http\Controllers';
    public function register(): void
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(function () {
                Route::get('/', 'HomeController@index');
            });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->register();
    }
}
