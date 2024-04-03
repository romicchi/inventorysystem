<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Client;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        // Attempt to log the user in as admin
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // If successful, then redirect to their intended location
            return redirect()->intended(route('admin.dashboard'));
        }

        // Attempt to log the user in as client
        if (Auth::guard('client')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // If successful, then redirect to their intended location
            return redirect()->intended(route('client.dashboard'));
        }

        // If unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout(Request $request)
    {
        if (Auth::guard('admin')->check()) {
            // If the user is an admin, log them out of the admin guard
            Auth::guard('admin')->logout();
        } elseif (Auth::guard('client')->check()) {
            // If the user is a client, log them out of the client guard
            Auth::guard('client')->logout();
        }

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
