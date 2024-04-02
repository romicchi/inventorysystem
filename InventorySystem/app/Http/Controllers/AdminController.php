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
}
