<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocumentController extends Controller
{
    public function showDocument()
    {
        $client = Auth::guard('client')->user(); // Get the client of the currently logged-in user

        return view('client.document', ['client' => $client]);
    }
}
