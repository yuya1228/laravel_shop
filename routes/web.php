<?php

use App\Http\Controllers\LikeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;

Route::get('/',[ShopController::class,'index'])->name('shops.index');
Route::get('/detail/{shop_id}',[ShopController::class,'detail'])->name('shops.detail');
Route::get('shops/like/{shops}',[LikeController::class,'like'])->name('like');
Route::get('shops/unlike/{shops}', [LikeController::class, 'unlike'])->name('unlike');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
