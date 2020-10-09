<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
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
        View::composer(
            'about', 'App\Http\View\Composers\AboutComposer'
        );
        View::composer(
            'index', 'App\Http\View\Composers\HomeComposer'
        );
        View::composer(
            'work', 'App\Http\View\Composers\WorkComposer'
        );
        View::composer(
            'contact', 'App\Http\View\Composers\ContactComposer'
        );

    }
}
