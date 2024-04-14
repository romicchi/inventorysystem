<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Client;
use App\Models\BusinessType;

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

    public function showRegisterForm()
    {
        $businessTypes = BusinessType::all();

        return view('register', ['businessTypes' => $businessTypes]);
    }
    
    public function register(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:clients',
            'password' => 'required|string|min:6|confirmed',
            'company_name' => 'required|string|max:255',
            'contact' =>  ['required','regex:/^([0-9\s\-\+\(\)]*)$/','min:10'],
            'address' => 'required|string|max:255',
            'tin' => 'required|string|max:255',
            'rdo' => 'required|string|max:255',
            'vn' => 'required|string|max:255',
            'business_type' => 'required|string|max:255',
            'socials' => 'required|string|max:255',
        ]);
    
        // Create a new client
        $client = new Client;
        $client->contact_name = $request->name;
        $client->email = $request->email;
        $client->password = bcrypt($request->password);
        $client->company = $request->company_name;
        $client->tin = $request->tin;
        $client->rdo_code = $request->rdo;
        $client->business_type_id = $request->business_type;
        $client->phone = $request->contact;
        $client->address = $request->address;
        $client->vn = $request->vn;
        $client->socials = json_encode($request->socials);
        $client->report_status_id = 1;
        $client->duration = '1';
        $client->save();
    
        // Log the client in
        Auth::guard('client')->login($client);
    
        // Redirect to the client dashboard
        return redirect()->route('client.dashboard');
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
