<?php

use App\Http\Controllers\Admins\DanhMucController;
use App\Http\Controllers\Admins\HomeController;
use App\Http\Controllers\Admins\KhachHangController;
use App\Http\Controllers\Admins\SanPhamController;
use App\Http\Controllers\Auths\AuthController;
use App\Http\Controllers\Auths\UserController;
use App\Http\Controllers\Clients\CheckoutController;
use App\Http\Controllers\Clients\HomeController as ClientsHomeController;
use App\Http\Controllers\Users\UserController as UsersUserController;
use App\Http\Middleware\CheckRoleAdminMiddleware;
use Illuminate\Support\Facades\Auth;
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

Route::get('/home', function () {
    return view('clients.home.index');
});
// Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard')->middleware(['auth','auth.admin']);
// Route::get('/login', [AuthController::class, 'showFormLogin']);
// Route::post('/login', [AuthController::class, 'login'])->name('login');
// Route::get('/register', [AuthController::class, 'showFormRegister']);
// Route::post('/register', [AuthController::class, 'register'])->name('register');
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// 
// Route::get('/client', [ClientsHomeController::class, 'index'])->name('client');
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [UsersUserController::class, 'show'])->name('profile');
    Route::put('/profile', [UsersUserController::class, 'update'])->name('profile.update');
    Route::get('cart', [CheckoutController::class, 'index'])->name('cart');
    Route::get('one', [CheckoutController::class, 'one'])->name('one');
    Route::get('two', [CheckoutController::class, 'two'])->name('two');
    Route::get('three', [CheckoutController::class, 'three'])->name('three');
    Route::get('details{id}', [ClientsHomeController::class, 'details'])->name('details');

    // Route::middleware(['auth.admin'])->group(function () {
    //     Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    //     Route::resource('khachhang', KhachHangController::class);
    //     Route::resource('sanpham', SanPhamController::class);
    //     Route::resource('danhmuc', DanhMucController::class);
    // });
});

Auth::routes();
Route::get('/home', [ClientsHomeController::class, 'index'])->name('home');

// Route ADMIN
Route::middleware(['auth', 'auth.admin'])->prefix('admins')
    ->as('admins.')
    ->group(function () {
        Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
        // route danh muc
        Route::prefix('danhmucs')
            ->as('danhmucs.')
            ->group(function () {
                Route::get('/', [DanhMucController::class, 'index'])->name('index');
                Route::get('/create', [DanhMucController::class, 'create'])->name('create');
                Route::post('/store', [DanhMucController::class, 'store'])->name('store');
                Route::post('/show/{id}', [DanhMucController::class, 'show'])->name('show');
                Route::get('/edit/{id}', [DanhMucController::class, 'edit'])->name('edit');
                Route::put('/update/{id}', [DanhMucController::class, 'update'])->name('update');
                Route::delete('/delete/{id}', [DanhMucController::class, 'destroy'])->name('destroy');
            });
        // Route san pham
        Route::prefix('sanphams')
            ->as('sanphams.')
            ->group(function () {
                Route::get('/', [SanPhamController::class, 'index'])->name('index');
                Route::get('/create', [SanPhamController::class, 'create'])->name('create');
                Route::post('/store', [SanPhamController::class, 'store'])->name('store');
                Route::post('/show/{id}', [SanPhamController::class, 'show'])->name('show');
                Route::get('/edit/{id}', [SanPhamController::class, 'edit'])->name('edit');
                Route::put('/update/{id}', [SanPhamController::class, 'update'])->name('update');
                Route::delete('/delete/{id}', [SanPhamController::class, 'destroy'])->name('destroy');
            });
        // Route khach hang
        Route::prefix('khachhangs')
            ->as('khachhangs.')
            ->group(function () {
                Route::get('/', [KhachHangController::class, 'index'])->name('index');
                Route::get('/create', [KhachHangController::class, 'create'])->name('create');
                Route::post('/store', [KhachHangController::class, 'store'])->name('store');
                Route::post('/show/{id}', [KhachHangController::class, 'show'])->name('show');
                Route::get('/edit/{id}', [KhachHangController::class, 'edit'])->name('edit');
                Route::put('/update/{id}', [KhachHangController::class, 'update'])->name('update');
                Route::delete('/delete/{id}', [KhachHangController::class, 'destroy'])->name('destroy');
            });
    });
