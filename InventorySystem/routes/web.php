<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClientLoginController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\DocumentController;

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

// register
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

// login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// --------- ADMIN ---------- //
Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::get('/company/{id}', [AdminController::class, 'show']);

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

    Route::get('/inventory', [InventoryController::class, 'showInventory'])->name('client.inventory');

    Route::get('/document', [DocumentController::class, 'showDocument'])->name('client.document');

    Route::get('/inventory/new', [StoreController::class, 'create'])->name('inventory.create');
    Route::post('/inventory/new', [StoreController::class, 'store'])->name('inventory.store');

    // profile
    Route::get('/profile', [ClientController::class, 'showProfile'])->name('client.profile');

    Route::put('/client/{id}', [ClientController::class, 'update'])->name('client.update');

    Route::get('/logs', function () {
        return view('client.activity_logs');
    });
});