<?php

namespace App\Providers;

use App\Models\Reservation;
use Facade\FlareClient\View;
use Illuminate\Support\Facades\View as FacadesView;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        FacadesView::composer('inc.evento-back-nav', function ($view) {
            $reservation = Reservation::all(); 
            $view->with('reservation', $reservation);
        });
    }
}
