<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class AdminController extends Controller
{
    public function index()
    {
        $totalClients = Client::count();
        return view('admin.dashboard', ['totalClients' => $totalClients]);
    }

    public function show($id)
    {
        $client = Client::find($id);
        
        return view('admin.company', ['client' => $client]);
    }
}
