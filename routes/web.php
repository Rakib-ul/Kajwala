<?php

use Illuminate\Support\Facades\Route;
//rakibul 
use App\Http\Controllers\AuthController;
//endrakibul 

Route::get('/', function () {
    return view('home');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/select-workers', function () {
    return view('select-workers');
});
Route::get('/worker-details', function () {
    return view('worker-details');
});
Route::get('/payment', function () {
    return view('payment');
});
Route::get('/register-user', function () {
    return view('register-user');
});
Route::get('/password-reset', function () {
    return view('password-reset');
});
Route::get('/worker-register', function () {
    return view('worker-register');
});
Route::get('worker-forgot-password', function () {
    return view('worker-forgot-password');
});
Route::get('/worker-profile', function () {
    return view('worker-profile');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/worker-login', function () {
    return view('worker-login');
});
Route::get('/providers', function () {
    return view('providers');
});
//rakibul edit 
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register-user', [AuthController::class, 'showRegisterForm']);
Route::post('/register-user', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard'); // create a dashboard.blade.php later
})->middleware('auth');