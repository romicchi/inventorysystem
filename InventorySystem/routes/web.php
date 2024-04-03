<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClientLoginController;
use App\Http\Controllers\AdminLoginController;

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
})->name('landingpage');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', function () {
    return view('register');
})->name('register');

// --------- ADMIN ---------- //
Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::get('/admin/clients', function () {
        return view('admin.clients');
    });

    Route::get('/admin/logs', function () {
        return view('admin.activity_logs');
    });
});

// --------- CLIENT ---------- //
Route::middleware(['client'])->group(function () {
    Route::get('/dashboard', [ClientController::class, 'index'])->name('client.dashboard');

    Route::get('/inventory', function () {
        return view('client.inventory');
    });

    Route::get('/document', function () {
        return view('client.document');
    });

    Route::get('/logs', function () {
        return view('client.activity_logs');
    });
});