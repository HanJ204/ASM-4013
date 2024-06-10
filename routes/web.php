<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminCateController;
use App\Http\Controllers\AdminProController;
use Illuminate\Support\Facades\Route;

//Trang chủ
Route::get('/', [HomeController::class, 'index'])->name('home');

//Trang chi tiết sản phẩm
Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('detail');

//Trang sản phẩm trong danh mục(theo nhà sx)
Route::get('/products/{idCata?}', [HomeController::class, 'showProducts'])->name('products');
Route::post('/savecomment', [HomeController::class,'savecomment']);

//Giỏ hàng
Route::get('/addcart/{idpro}/{quantity}', [HomeController::class,'addcart'])->name('addcart');
Route::get('/showcart', [HomeController::class,'showcart'])->name('cart');
Route::get('/deletecart/{idpro}', [HomeController::class,'deletecart']);

Route::group(['prefix' => 'admin'], function() {
    Route::get('/dashboard', [AdminController::class,'index']);
    Route::get('dangnhap', [AdminController::class,'dangnhap']);
    Route::post('dangnhap', [AdminController::class,'dangnhap_']);
    Route::get('thoat', [AdminController::class, 'thoat']);
    Route::resource('cate', AdminCateController::class);
    Route::resource('product', AdminProController::class);
});

Route::get('/thongbao', function () {
    return view('thongbao');
});