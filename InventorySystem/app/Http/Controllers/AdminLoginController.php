<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected function guard()
    {
        return Auth::guard('admin');
    }
}
