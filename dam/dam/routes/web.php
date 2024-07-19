<?php

use App\Http\Controllers\Admins\DanhMucController;
use App\Http\Controllers\Admins\HomeController;
use App\Http\Controllers\Admins\KhachHangController;
use App\Http\Controllers\Admins\SanPhamController;
use App\Http\Controllers\Auths\AuthController;
use App\Http\Controllers\Auths\UserController;
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

Route::get('/', function () {
    return view('clients.index');
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
   
    Route::middleware(['auth.admin'])->group(function () {
        Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
        Route::resource('khachhang', KhachHangController::class);
        Route::resource('sanpham', SanPhamController::class);
        Route::resource('danhmuc', DanhMucController::class);
    });
});

Auth::routes();
Route::get('/home', [ClientsHomeController::class, 'index'])->name('home');