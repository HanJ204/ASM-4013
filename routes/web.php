<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminCateController;
use App\Http\Controllers\AdminProController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

//Trang chủ
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [UsersController::class, 'login'])->name('login');
Route::post('/login', [UsersController::class, 'login_']);
Route::get('/register', [UsersController::class, 'register'])->name('register');
Route::post('/register', [UsersController::class, 'register_']);
Route::get('/exit', [UsersController::class, 'exit']);

Route::get('/profile', [UsersController::class, 'profile']);
Route::group(['prefix' => 'account'], function() {
    Route::get('profile', [UsersController::class,'profile'])->name('profile');
});

//Trang chi tiết sản phẩm
Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('detail');

//Trang sản phẩm trong danh mục(theo nhà sx)
Route::get('/products/{idCata?}', [HomeController::class, 'showProducts'])->name('products');
Route::post('/savecomment', [HomeController::class,'savecomment']);

//Giỏ hàng
Route::get('/addcart/{idpro}/{quantity}', [HomeController::class,'addcart'])->name('addcart');
Route::get('/showcart', [HomeController::class,'showcart'])->name('cart');
Route::get('/deletecart/{idpro}', [HomeController::class,'deletecart']);

Route::group(['prefix' => 'admin','middleware' => [AdminMiddleware::class]], function() {
    Route::get('/dashboard', [AdminController::class,'index']);
    Route::get('exit', [AdminController::class, 'exit']);
    Route::resource('cate', AdminCateController::class);
    Route::resource('product', AdminProController::class);
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('login', [AdminController::class,'login']);
    Route::post('login', [AdminController::class,'login_']);
});

Route::get('/thongbao', function () {
    return view('thongbao');
});