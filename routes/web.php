<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
    return view('welcome');
});

Route::get('/create', [AuthController::class, 'create'])->name('create');
Route::get('/Extra_toppings', [AuthController::class, 'Extra_toppings'])->name('Extra_toppings');
Route::post('/pizzas', [AuthController::class, 'store'])->name('store');
Route::get('/search-order', [AuthController::class, 'search'])->name('search.order');





// Routes that should only be accessible by guests (not logged in)
Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister'])->name('show.register');
    Route::get('/login', [AuthController::class, 'showLogin'])->name('show.login');
    Route::post('/register', [AuthController::class, 'Register'])->name('register');
    Route::post('/login', [AuthController::class, 'Login'])->name('login');


    Route::get('/forgot_password', [AuthController::class, 'forgot_password'])->name('password.request');
    Route::post('/forgot_password', [AuthController::class, 'passwordEmail'])->name('password.email');
    Route::get('/reset_password/{token}', [AuthController::class, 'passwordReset'])->name('password.reset');
    Route::post('/reset_password', [AuthController::class, 'passwordUpdate'])->name('password.update');

});

// Routes that require the user to be logged in
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'Logout'])->name('logout');
    Route::get('/home', [AuthController::class, 'index'])->name('home');
    Route::get('/pizzas', [AuthController::class, 'pizzas'])->name('pizzas');


    Route::delete('/pizzas/{id}', [AuthController::class, 'destroy']);
    Route::get('order_search', [AuthController::class, 'order_search']);
    Route::get('/pizzas/update_status/{id}', [AuthController::class, 'update_status']);
    Route::get('/pizzas/{id}', [AuthController::class, 'show'])->name('pizzas.show');
    Route::put('/pizzas/{id}', [AuthController::class, 'update']);
   
    Route::get('/profile', [AuthController::class, 'profile'])->name('profile.show');
    Route::put('/profile', [AuthController::class, 'update_password'])->name('profile.update');
});
