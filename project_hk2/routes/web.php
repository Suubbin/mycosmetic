<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Controllers (Client)
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\UserController as FrontUserController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ReportController;

// Controllers (Admin)
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\SettingsController;

// Middleware
use App\Http\Middleware\IsAdmin;

/*
|--------------------------------------------------------------------------
| 🛒 CLIENT ROUTES
|--------------------------------------------------------------------------
*/

// Trang chủ
Route::get('/', fn () => view('home'))->name('home');

// Đăng ký / Đăng nhập / Đăng xuất
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

// Sản phẩm
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Giỏ hàng
Route::prefix('cart')->group(function () {
    Route::post('/add/{id}', [CartController::class, 'add'])->name('cart.add');
    Route::get('/', [CartController::class, 'view'])->name('cart.view');
    Route::post('/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('/update/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::post('/save-location', [CartController::class, 'saveLocation'])->name('cart.saveLocation');
});

// Thanh toán
Route::get('/checkout', fn () => view('cart.checkout'))->name('checkout');
Route::post('/checkout/complete', [CartController::class, 'completeOrder'])->middleware('auth')->name('cart.completeOrder');

// Địa chỉ động
Route::post('/get-districts', [LocationController::class, 'getDistricts']);
Route::post('/get-wards', [LocationController::class, 'getWards']);

// Tài khoản người dùng
Route::middleware('auth')->prefix('account')->name('user.')->group(function () {
    Route::get('/', [FrontUserController::class, 'account'])->name('account');
    Route::get('/orders', [FrontUserController::class, 'orders'])->name('orders');
    Route::get('/orders/{id}', [FrontUserController::class, 'viewOrder'])->name('orders.view');
});

// Trang đặc biệt
Route::get('/new', [NewController::class, 'index'])->name('new');
Route::get('/sale', [SaleController::class, 'sale'])->name('sale');
Route::get('/about', fn () => view('about'))->name('about');
Route::get('/search', fn (Request $request) => view('search', ['query' => $request->input('query')]))->name('search');

// Báo cáo
Route::prefix('report')->group(function () {
    Route::get('/daily', [ReportController::class, 'dailyReport']);
    Route::get('/weekly', [ReportController::class, 'weeklyReport']);
    Route::get('/monthly', [ReportController::class, 'monthlyReport']);
    Route::get('/yearly', [ReportController::class, 'yearlyReport']);
    Route::get('/quarterly', [ReportController::class, 'quarterlyReport']);
    Route::get('/stock', [ReportController::class, 'stockReport']);
});

/*
|--------------------------------------------------------------------------
| 🔐 ADMIN ROUTES
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', IsAdmin::class])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    // ✔️ Cài đặt hệ thống
    Route::get('/settings', [SettingsController::class, 'edit'])->name('settings');
    Route::patch('/settings', [SettingsController::class, 'update'])->name('settings.update');

    // Quản lý người dùng
    Route::get('/users', [AdminUserController::class, 'index'])->name('users.index');
    Route::get('/users/{id}', [AdminUserController::class, 'show'])->name('users.show');
    Route::patch('/users/{id}/toggle-status', [AdminUserController::class, 'toggleStatus'])->name('users.toggleStatus');
    Route::delete('/users/{id}', [AdminUserController::class, 'destroy'])->name('users.destroy');

    // Quản lý đơn hàng
    Route::get('/orders/user/{user}', [AdminOrderController::class, 'index'])->name('orders.vieworders');
    Route::get('/orders/{order}', [AdminOrderController::class, 'show'])->name('orders.show');
    Route::patch('/orders/{order}/status', [AdminOrderController::class, 'updateStatus'])->name('orders.updateStatus');

    // Quản lý sản phẩm
    Route::resource('products', ProductController::class)->except(['show']);
});