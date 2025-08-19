<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceRequestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;

// =====================
// Public Routes
// =====================
Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

// Contact Page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Admin Contact Management
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/contacts', [ContactController::class, 'index'])->name('contacts.index');
});

// Portfolio & Providers
Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/providers', function () {
    return view('providers');
});

// =====================
// Authentication Routes
// =====================
Route::middleware('guest')->group(function () {
    // User Auth Routes
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    
    Route::get('/register-user', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register-user', [AuthController::class, 'register']);

    // Worker Auth Routes
    Route::get('/worker-login', [WorkerController::class, 'showLoginForm'])->name('worker.login');
    Route::post('/worker-login', [WorkerController::class, 'login'])->name('worker.login.submit');

    Route::get('/worker-register', [WorkerController::class, 'showRegisterForm'])->name('worker.register');
    Route::post('/worker-register', [WorkerController::class, 'register'])->name('worker.register.submit');

    Route::get('/worker-forgot-password', [WorkerController::class, 'showForgotPasswordForm'])->name('worker.password.request');
    Route::post('/worker-forgot-password', [WorkerController::class, 'handleForgotPassword'])->name('worker.password.email');
});

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// =====================
// Authenticated User Routes
// =====================
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
    
    Route::get('/payment', function () {
        return view('payment');
    })->name('payment');
    
    // Worker Profile
    Route::get('/worker-profile', function () {
        return view('worker-profile');
    })->name('worker.profile');
});

// =====================
// Admin Routes
// =====================
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('services', ServiceController::class)->except(['show']);
    Route::resource('workers', WorkerController::class);
    Route::post('/workers/{worker}/verify', [WorkerController::class, 'verify'])->name('workers.verify');
    Route::get('/requests', [ServiceRequestController::class, 'index'])->name('requests.index');
    Route::get('/requests/{request}', [ServiceRequestController::class, 'show'])->name('requests.show');
    Route::put('/requests/{request}/status', [ServiceRequestController::class, 'updateStatus'])->name('requests.status');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
});

// =====================
// API Routes
// =====================
Route::prefix('api')->middleware('auth:sanctum')->group(function () {
    Route::get('/dashboard/stats', [DashboardController::class, 'getStats']);
});

// =====================
// SSLCOMMERZ Routes
// =====================
// SSLCOMMERZ Start
Route::get('/check1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/check2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END


// =====================
// Newsletter Subscribe
// =====================
Route::post('/subscribe', [NewsletterController::class, 'store'])->name('newsletter.subscribe');


Route::middleware('auth:worker')->group(function () {
    Route::get('/worker-profile', [WorkerController::class, 'edit'])->name('worker.profile');
    Route::post('/worker-profile', [WorkerController::class, 'update'])->name('worker.profile.update');
});

Route::get('/services/search', [ServiceController::class, 'searchByLocation'])
     ->name('services.search');

// Page: show matching workers
Route::get('/select-workers', [ServiceController::class, 'selectWorkers'])
     ->name('select.workers');

Route::post('/select-worker', [WorkerController::class, 'showAvailableWorkers'])->name('workers.select');

Route::get('/payment', [PaymentController::class, 'showCheckoutForm'])->name('payment.show');
