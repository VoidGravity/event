<?php 

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;








//socialite


Route::get('/auth/{provider}/redirect', function ($provider) {

    return Socialite::driver($provider)->redirect();
});

Route::get('/auth/{provider}/callback', function ($provider) {
    try {
        $SocialiteUser = Socialite::driver($provider)->user();
    } catch (\Exception $e) {
        return redirect()->route('auth/login');
    }
    $user = User::where([
        'provider' => $provider,
        'provider_id' => $SocialiteUser->getId()
    ])->first();
    if (!$user) {
        if (User::where('email', $SocialiteUser->getEmail())->exists()) {
            return redirect()->route('auth/login')->withErrors('Email already exists');
        }
        $user = User::create([
            'name' => $SocialiteUser->getNickname(),
            'email' => $SocialiteUser->getEmail(),
            'provider' => $provider,
            'provider_id' => $SocialiteUser->getId(),
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'email_verified_at' => now()
        ]);
    }
    Auth::login($user);
    return redirect()->route('Evento/index');
});
