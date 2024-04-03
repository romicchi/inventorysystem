<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientLoginController extends Controller
{
    protected function guard()
    {
        return Auth::guard('client');
    }
}
