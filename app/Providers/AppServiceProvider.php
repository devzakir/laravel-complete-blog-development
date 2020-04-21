<?php

namespace App\Providers;

use App\Category;
use App\Setting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        $categories = Category::take(5)->get();
        View::share('categories', $categories);

        $setting = Setting::first();
        View::share('setting', $setting);
    }
}
