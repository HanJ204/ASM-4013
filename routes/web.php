<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

//Trang chủ
Route::get('/', [HomeController::class, 'index']);

//Trang chi tiết sản phẩm
Route::get('/detail/{id}', [HomeController::class, 'detail']);

//Trang sản phẩm trong danh mục(theo nhà sx)
Route::get('/category/{idcate}', [HomeController::class, 'category']);

//Trang đăng nhập, đăng ký, quên mật khẩu
Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);
Route::get('/forgot-password', [AuthController::class, 'forgotPassword']);