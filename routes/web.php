<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\WorkerController;
//azam
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\SslCommerzPaymentController;

// Public Routes
Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

// Route::get('/contact', function () {
//     return view('contact');
// });
// Show contact form (your blade view)
// Contact Page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Admin Contact Management
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/contacts', [ContactController::class, 'index'])->name('contacts.index');
});

//azam

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/providers', function () {
    return view('providers');
});
Route::get('/', function () {
    return view('home');
});

//likhon worker 

// Authentication Routes
Route::middleware('guest')->group(function () {
    // User Auth Routes
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    
    Route::get('/register-user', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register-user', [AuthController::class, 'register']);

    Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    // Add other guest routes here
});
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/request-service', [DashboardController::class, 'requestService'])->name('request.service');
    // Add other protected routes here
});

    
    // Worker Auth Routes
    Route::get('/worker-login', function () {
        return view('worker-login');
    })->name('worker.login');
    
    Route::get('/worker-register', function () {
        return view('worker-register');
    })->name('worker.register');
    
    Route::get('/worker-forgot-password', function () {
        return view('worker-forgot-password');
    })->name('worker.password.request');
});
//likhon 

// Worker Auth Routes

// Display the worker login form
Route::get('/worker-login', [WorkerController::class, 'showLoginForm'])->name('worker.login');

// Handle worker login
Route::post('/worker-login', [WorkerController::class, 'login'])->name('worker.login.submit');

// Display the worker registration form
Route::get('/worker-register', [WorkerController::class, 'showRegisterForm'])->name('worker.register');

// Handle worker registration
Route::post('/worker-register', [WorkerController::class, 'register'])->name('worker.register.submit');

// Display the worker forgot password form
Route::get('/worker-forgot-password', [WorkerController::class, 'showForgotPasswordForm'])->name('worker.password.request');

// Handle worker password reset logic (you can add the controller method for handling reset)
Route::post('/worker-forgot-password', [WorkerController::class, 'handleForgotPassword'])->name('worker.password.email');

// Logout Route (accessible when authenticated)
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Authenticated Routes
Route::middleware('auth')->group(function () {
    // Dashboard Routes
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/request-service', [DashboardController::class, 'requestService'])->name('request.service');
    
    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    
    // Service Flow Routes
    Route::post('/services/find', [ServiceController::class, 'findServices'])->name('services.find');
    Route::get('/workers/select', [ServiceController::class, 'selectWorkers'])->name('workers.select');
    Route::get('/workers/{worker}', [WorkerController::class, 'show'])->name('worker.details');
    
    Route::get('/select-workers', function () {
        return view('select-workers');
    })->name('select.workers');
    
    Route::get('/worker-details', function () {
        return view('worker-details');
    })->name('worker.details');
    
    // Route::get('/payment', function () {
    //     return view('payment');
    // })->name('payment');
    
    // Worker Profile (if needed for authenticated workers)
    Route::get('/worker-profile', function () {
        return view('worker-profile');
    })->name('worker.profile');
});

// API Routes (added without modifying existing routes)
Route::prefix('api')->middleware('auth:sanctum')->group(function () {
    Route::get('/dashboard/stats', [DashboardController::class, 'getStats']);
});

// SSLCOMMERZ Start
Route::get('/checkout', [SslCommerzPaymentController::class, 'exampleEasyCheckout'])->name('checkout');
Route::get('/checkout2', [SslCommerzPaymentController::class, 'exampleHostedCheckout'])->name('checkout2');

Route::post('/pay', [SslCommerzPaymentController::class, 'index'])->name('pay');
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax'])->name('pay.ajax');

Route::post('/success', [SslCommerzPaymentController::class, 'success'])->name('pay.success');
Route::post('/fail', [SslCommerzPaymentController::class, 'fail'])->name('pay.fail');
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel'])->name('pay.cancel');

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn'])->name('pay.ipn');
// SSLCOMMERZ END

//subscriber azam
Route::post('/subscribe', [NewsletterController::class, 'store'])->name('newsletter.subscribe');

//nijhum

