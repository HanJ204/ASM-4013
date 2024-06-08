<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//Trang chủ
Route::get('/', [HomeController::class, 'index']);

//Trang chi tiết sản phẩm
Route::get('/detail/{id}', [HomeController::class, 'detail']);

//Trang sản phẩm trong danh mục(theo nhà sx)
Route::get('/category/{idcate}', [HomeController::class, 'category']);