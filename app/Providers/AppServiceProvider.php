<?php

namespace App\Providers;

use App\Models\Category;
use App\Repository\IRepository;
use App\Repository\R_Repository;
use Illuminate\Pagination\Paginator;
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
        $this->app->singleton(IRepository::class,R_Repository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        Paginator::useBootstrap();
//
//        $categoriesMenu = Category::where("menu_show",1)->orderBy("category_name","asc")->get();
//        view()->share('categoriesMenu', $categoriesMenu );
    }
}
