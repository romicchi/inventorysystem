<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

// --------- ADMIN ---------- //
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

Route::get('/admin/clients', function () {
    return view('admin.clients');
});

Route::get('/admin/logs', function () {
    return view('admin.activity_logs');
});

// --------- CLIENT ---------- //
Route::get('/dashboard', function () {
    return view('client.dashboard');
});

Route::get('/inventory', function () {
    return view('client.inventory');
});

Route::get('/document', function () {
    return view('client.document');
});

Route::get('/logs', function () {
    return view('client.activity_logs');
});