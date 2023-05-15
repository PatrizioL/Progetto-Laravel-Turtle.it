<?php

namespace App\Providers;

use App\Models\Annuncio;
use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // if(Schema::hasTable('annuncios'))
        // {
        //     $annuncios=Annuncio::all();
        //     View::share('annuncios',$annuncios);
        // }


        if(Schema::hasTable('categories'))
        {
            $categories = Category::all();
            View::share('categories', $categories);
        }

        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();
    }

}