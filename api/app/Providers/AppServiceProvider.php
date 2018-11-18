<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Property\PropertyInterface;
use App\Repositories\Property\PropertyRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PropertyInterface::class,PropertyRepository::class);   
    }
}
