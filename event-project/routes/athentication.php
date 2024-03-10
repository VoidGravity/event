<?php 

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

use Google\Service\Calendar as Google_Service_Calendar;







//socialite


Route::get('/auth/{provider}/redirect', function ($provider) {
    if ($provider === 'google') {
        // Request both read and write access to the user's calendar
        return Socialite::driver($provider)
            ->scopes([
                Google_Service_Calendar::CALENDAR, // This scope allows for full access to the calendar
                Google_Service_Calendar::CALENDAR_READONLY,
            ])
            ->with(['access_type' => 'offline', 'prompt' => 'consent'])
            ->redirect();
    }

    return Socialite::driver($provider)->redirect();
});


// Route::get('/auth/{provider}/redirect', function ($provider) {
//     if ($provider === 'google') {
//         return Socialite::driver($provider)
//             ->scopes([Google_Service_Calendar::CALENDAR_READONLY]) // Ensure you have the right constant for the scope
//             ->redirect();
//     }

//     return Socialite::driver($provider)->redirect();
// });
// Route::get('/auth/{provider}/redirect', function ($provider) {

//     return Socialite::driver($provider)->redirect();
// });

Route::get('/auth/{provider}/callback', function ($provider) {
    try {
        $SocialiteUser = Socialite::driver($provider)->user();
        
        // Find or create the user based on provider id
        $user = User::firstOrCreate(
            [
                'provider' => $provider,
                'provider_id' => $SocialiteUser->getId(),
            ],
            [
                'email' => $SocialiteUser->getEmail(),
                'name' => $SocialiteUser->getName(),
                // You may not want to set a password like this, consider nullable or alternative
                'password' => bcrypt('randompassword'),
                // Set other fields if necessary
            ]
        );

        // Update the user's OAuth token and refresh token here
        $user->token = $SocialiteUser->token;
        // If the OAuth provider gives a refresh token, save it as well
        $user->refreshToken = $SocialiteUser->refreshToken ?? $user->refreshToken; // save the old one if a new one wasn't provided
        $user->save();

        // Log the user in
        Auth::login($user, true); // The 'true' argument here ensures the user is remembered

        return redirect()->route('Evento/index');
    } catch (\Exception $e) {
        // Optionally, log the exception
        // Log::error($e->getMessage());

        return redirect()->route('auth/login')->withErrors('Error: ' . $e->getMessage());
    }
});

// Route::get('/auth/{provider}/callback', function ($provider) {
//     try {
//         $SocialiteUser = Socialite::driver($provider)->user();
//     } catch (\Exception $e) {
//         return redirect()->route('auth/login');
//     }
//     $user = User::where([
//         'provider' => $provider,
//         'provider_id' => $SocialiteUser->getId()
//     ])->first();
//     if (!$user) {
//         if (User::where('email', $SocialiteUser->getEmail())->exists()) {
//             return redirect()->route('auth/login')->withErrors('Email already exists');
//         }
//         $user = User::create([
//             'name' => $SocialiteUser->getNickname(),
//             'email' => $SocialiteUser->getEmail(),
//             'provider' => $provider,
//             'provider_id' => $SocialiteUser->getId(),
//             'password' => bcrypt('12345678'),
//             'role' => 'admin',
//             'email_verified_at' => now()
//         ]);
//     }
//     Auth::login($user);
//     return redirect()->route('Evento/index');
// });
