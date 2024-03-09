<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\PasswordResetMail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function showResetForm($token)
    {
        return view('auth.password-reset', ['token' => $token]);
    }
    public function showAuthForgotPassword()
    {
        return view('auth.auth-reset');
    }


    public function AuthResetPassword(Request $request)
    {
        // $request->validate([
        //     'email' => 'required|email',
        // ]);
        $email = $request->email;
        // dd($email);
        $token = md5($email);
        $user = DB::table('users')->where('email', $email)->first();
        if ($user) {
            DB::table('password_resets')->insert([
                'email' => $email,
                'token' => $token,
            ]);
            // Send email
            Mail::to($user->email)->send(new PasswordResetMail($token, $email));
            return redirect()->route('auth/auth-success');
        }
        return back()->withErrors([
            'message' => 'We can\'t find a user with that email address.'
        ]);
    }
    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'password' => 'required|confirmed',
        ]);

        // Lookup the email based on the token
        $record = DB::table('password_resets')->where('token', $request->token)->first();

        if (!$record) {
            return back()->withErrors(['token' => 'Invalid token.']);
        }

        // Retrieve the user based on the email found in the password_resets table
        $user = User::where('email', $record->email)->first();
        if (!$user) {
            return back()->withErrors(['email' => 'No user found with this email address.']);
        }

        // Update the user's password
        $user->password = Hash::make($request->password);
        $user->save();

        // Delete the password reset record
        DB::table('password_resets')->where('token', $request->token)->delete();

        return redirect()->route('auth/login')->with('status', 'Your password has been reset.');
    }

    public function authSuccess()
    {
        return view('auth.auth-success');
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showAuthLogin()
    {
        return view('auth.login');
    }

    public function showAuthRegister()
    {
        return view('auth.register');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('Evento/index');
        }

        // If authentication fails, you might want to return back with an error message
        return back()->withErrors([
            'message' => 'The provided credentials do not match our records.'
        ]);
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email', // Ensure the email is unique in the users table
            'password' => 'required',
            // Optionally add role validation if the role is part of the registration form
            // 'role' => 'required|in:patient,doctor,admin', // Example validation rule
        ]);

        // Assuming a default role of 'patient' for new registrations
        // If the role comes from the request, use $request->role instead
        // dd($request->all());
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Use Hash facade correctly
            'role_id' => '1', // Set the default role or use $request->role if provided and validated
        ]);

        // After successful registration, you might want to log the user in and redirect them
        auth()->login($user);

        // Redirect to a specific route after registration
        return redirect()->route('Evento/index');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('auth/login');
    }
}
