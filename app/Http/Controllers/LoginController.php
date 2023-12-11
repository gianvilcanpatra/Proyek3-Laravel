<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginproses(Request $request)
    {
       
        $credentials = $request->only('email', 'password');

        // Validate that email and password are not empty
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email is required!',
            'email.email' => 'Invalid email format!',
            'password.required' => 'Password is required!',
        ]);
        if (Auth::attempt($credentials)) {
            return redirect('tampilanawal');
        }
    
        $user = User::where('email', $request->email);
    
        if ($user) {
            // Incorrect password
            return redirect('/login')->with('login_error', 'Invalid password. Please try again!');
        }
    
        // Incorrect email
        return redirect('/login')->with('login_error', 'Invalid email. Please try again!');
    }

    public function register()
    {
        return view('register');
    }

    public function registeruser(Request $request)
    {
        $emailExists = User::where('email', $request->email)->exists();

        if ($emailExists) {
            return redirect('/register')->with('email_error', 'Email is already in use. Please choose another email!');
        }

        $messages = [
            'name.required' => 'Name must be filled in.',
            'email.required' => 'Email must be filled in.',
            'email.email' => 'Invalid email format.',
            'email.unique' => 'Email is already in use. Choose another email.',
            'password.required' => 'Password must be filled in.',
            'password.min' => 'Password must be at least 6 characters.',
            'password.confirmed' => 'Password confirmation does not match.',
        ];
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ], $messages);

        session(['name' => $request->name]);

        $user = User::create([
            'user_id' => Str::uuid(),
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        Auth::login($user);

        return redirect('/login');
    }
}
