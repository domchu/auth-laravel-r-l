<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::view("/", "home")->name('home');

// REGISTER ROUTE
Route::get('/register', [RegisterController::class, 'index'] )->name('register');
Route::post('/register', [RegisterController::class, 'create']);


// LOGIN ROUTE
Route::get('/login', [LoginController::class, 'index'] )->name('login');

Route::post('/login', [LoginController::class, 'login']);

// LOGOUT ROUTE
Route::post('/logout', [LogoutController::class, 'logout'])->name('logou');








Route::get('/about', function () {
    return view('pages.about');
});


Route::get("/contact", function () {
    return view("pages.contact");
});

Route::view("/faq", "pages.faq");