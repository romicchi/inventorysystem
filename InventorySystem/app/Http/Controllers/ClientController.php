<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    protected function guard()
    {
        return Auth::guard('client');
    }

    public function index()
    {
        return view('client.dashboard');
    }

    public function showProfile()
    {
        $client = Auth::guard('client')->user(); // Get the client of the currently logged-in user

        return view('client.profile', ['client' => $client]);
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'company' => 'required',
            'contact_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'tin' => 'required',
            'vn' => 'required',
            'rdo_code' => 'required',
            'business_type' => 'required', // Corrected column name
            'socials' => 'nullable|json',
        ]);
    
        // Find the client by id
        $client = Client::find($id);
    
        // Update the client's information
        $client->update([
            'company' => $request->company,
            'contact_name' => $request->contact_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'tin' => $request->tin,
            'vn' => $request->vn,
            'rdo_code' => $request->rdo_code,
            'businessType' => $request->business_type, // Corrected column name
            'socials' => json_encode($request->socials),
        ]);
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Client information updated successfully.');
    }
    
    
}
