<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\AdminController;

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

// Dynamic service category route (by category field)
Route::get('/services/{category}', [ServiceController::class, 'showCategory'])->name('services.category');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/providers', function () {
    return view('providers');
});

// Newsletter subscription
Route::post('/subscribe', [NewsletterController::class, 'store'])->name('newsletter.subscribe');

// Authentication Routes
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

// Logout Route (accessible when authenticated)
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Authenticated User Routes
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
    
    Route::get('/worker-profile', function () {
        return view('worker-profile');
    })->name('worker.profile');
    
    // Admin Contact Management
    Route::get('/admin/contacts', [ContactController::class, 'index'])->name('contacts.index');
});

// Admin Routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    
    // Services Management
    Route::resource('services', AdminController::class);
    
    // Workers Management
    Route::resource('workers', AdminController::class);
    
    // Service Requests Management
    Route::get('/requests', [AdminController::class, 'requests'])->name('requests.index');
    Route::get('/requests/{request}', [AdminController::class, 'showRequest'])->name('requests.show');
    
    // Users Management
    Route::get('/users', [AdminController::class, 'users'])->name('users.index');
});

// API Routes
Route::prefix('api')->middleware('auth:sanctum')->group(function () {
    Route::get('/dashboard/stats', [DashboardController::class, 'getStats']);
});

// Payment Routes (commented out until controller is created)
// Route::get('/checkout', [SslCommerzPaymentController::class, 'exampleEasyCheckout'])->name('checkout');
// Route::get('/checkout2', [SslCommerzPaymentController::class, 'exampleHostedCheckout'])->name('checkout2');
// Route::post('/pay', [SslCommerzPaymentController::class, 'index'])->name('pay');
// Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax'])->name('pay.ajax');
// Route::post('/success', [SslCommerzPaymentController::class, 'success'])->name('pay.success');
// Route::post('/fail', [SslCommerzPaymentController::class, 'fail'])->name('pay.fail');
// Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel'])->name('pay.cancel');
// Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn'])->name('pay.ipn');

