<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;

class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check()) {
            $user = auth()->user();
            $userROle = Role::where('id', $user->role_id)->first();
            if ( $userROle != 'admin' && $userROle != 'organisateur') {
                return redirect()->route('Evento/landning');
            }
        } else {
            return redirect()->route('auth/login');
        }
        return $next($request);
       
    }
}
