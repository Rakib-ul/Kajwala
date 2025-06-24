<?php

use Illuminate\Support\Facades\Route;

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
