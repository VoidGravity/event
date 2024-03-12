<?php

namespace App\Providers;

use App\Models\Event;
use App\Models\Reservation;
use App\Models\User;
use Facade\FlareClient\View;
use Illuminate\Support\Facades\Auth;
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
            $user = Auth::user();
            $reservation = $user->reservations()->with('event')->get();
            // dd($reservation);
            $view->with('reservation', $reservation);
        });
        FacadesView::composer('inc.sidebar', function ($view) {
            $user = Auth::user();
            $currentRole = $user->role->name;
            // dd($currentRole);

            // $roleName = 'admin';
            // $usersWithRole = User::whereHas('role', function ($query) use ($roleName) {
            //     $query->where('name', $roleName);
            // })->get();
            $view->with('currentRole', $currentRole);
        });
    }
}
