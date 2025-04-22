<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Eskul;


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
    public function boot()
    {
        View::composer('partials.admin-sidebar', function ($view) {
            if (auth()->check() && auth()->user()->role === 'admin') {
                $eskuls = Eskul::all(); // ambil semua eskul jika admin
                $view->with('eskuls', $eskuls);
            }
        });
    }
}
