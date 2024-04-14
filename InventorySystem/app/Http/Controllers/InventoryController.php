<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\InventoryType;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class InventoryController extends Controller
{
    protected function guard()
    {
        return Auth::guard('client');
    }
    
    public function showInventory()
    {
        $client = Auth::guard('client')->user(); // Get the client of the currently logged-in user

        return view('client.inventory', ['client' => $client]);
    }
}
