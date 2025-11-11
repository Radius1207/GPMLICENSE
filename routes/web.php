<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// SỬA: Thêm các Controller
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LicenseController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Đây là file cho các route "truyền thống" (tải lại trang).
|
*/

// Trang Landing Page (welcome.blade.php)
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Các route BẮT BUỘC đăng nhập (được bảo vệ bởi 'auth')
Route::middleware('auth')->group(function () {
    
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Products
    Route::get('/products', [ProductController::class, 'index'])->name('products');

    // My Licenses
    // SỬA LỖI: Đổi tên từ 'my-licenses' thành 'licenses.index'
    Route::get('/my-licenses', [LicenseController::class, 'index'])->name('licenses.index');

    // My Orders
    // SỬA LỖI: Đổi tên từ 'orders' thành 'orders.index'
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');

    // SỬA LỖI: Thêm lại các route "Profile" của Breeze
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Thêm dòng này vào file routes/web.php của bạn, bên trong nhóm middleware 'auth' và 'admin'

    Route::post('/admin/orders/{order}/approve', [AdminController::class, 'approveOrder'])->name('admin.orders.approve');

    // THÊM DÒNG NÀY:
    Route::post('/admin/orders/{order}/reject', [AdminController::class, 'rejectOrder'])->name('admin.orders.reject');

    // Admin Routes (Bảo vệ 2 lớp: đăng nhập + middleware 'admin' trong Controller)
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/orders', [AdminController::class, 'index'])->name('orders.index');
        // Dùng {order} để Laravel tự tìm Order
        Route::post('/orders/{order}/approve', [AdminController::class, 'approveOrder'])->name('orders.approve');
    });

});

// Các file Auth (login, register...) do Breeze tự động thêm
require __DIR__.'/auth.php';