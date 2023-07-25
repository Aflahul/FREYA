<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Order;
use App\Models\Pengeluaran;
use App\Observers\OrderObserver;
use App\Observers\PengeluaranObserver;

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
        Order::observe(OrderObserver::class);
        Pengeluaran::observe(PengeluaranObserver::class);
    }
}
