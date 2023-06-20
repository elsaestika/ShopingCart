<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PakaianController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MemberController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function(){
    return view('welcome');
});
Route::get('beranda',function(){
    return view('beranda');
})->middleware('auth:member');
    Route::get('login',[AuthController::class, 'login'])->name('login');
    Route::post('login',[AuthController::class, 'auth']);
    Route::get('register', [MemberController::class, 'register']);
    Route::post('register', [MemberController::class, 'create']);
    Route::get('user/logout',[AuthController::class, 'logout']);

Route::get('dashboard',function(){
    return view('dashboard');
})->middleware('auth:web');
    Route::get('login/admin',[AuthController::class, 'login_admin']);
    Route::post('login/admin',[AuthController::class, 'auth']);
    Route::get('register/admin',[UserController::class, 'register']);
    Route::post('register/admin', [UserController::class, 'create']);
    Route::get('logout/admin',[AuthController::class, 'logout_admin']);

Route::get('beranda', [PakaianController::class, 'show']);
Route::get('produk/detail/{id}',[PakaianController::class,'detail']);

// Route::get('admin',[AdminController::class, 'show']);
// Route::get('admin/add',[AdminController::class, 'add']);
// Route::post('admin/create',[AdminController::class, 'create']);

Route::get('produk',[ProdukController::class, 'show']);
Route::get('produk/add',[ProdukController::class, 'add']);
Route::post('produk/create', [ProdukController::class, 'create']);
Route::get('produk/hapus/{id}', [ProdukController::class, 'hapus']);
Route::get('produk/edit/{id}', [ProdukController::class, 'edit']);
Route::post('produk/update/{id}',[ProdukController::class, 'update']);


