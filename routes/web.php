<?php

use App\Http\Controllers\LikeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/',[ShopController::class,'index'])->name('shops.index');
Route::get('/detail/{shop_id}',[ShopController::class,'detail'])->name('shops.detail');
Route::get('/find/{id}', [ShopController::class, 'find'])->name('shops.find');
Route::get('done',[ShopController::class,'done'])->name('done');
Route::get('shops/like/{shops}',[LikeController::class,'like'])->name('like');
Route::get('shops/unlike/{shops}', [LikeController::class, 'unlike'])->name('unlike');
Route::post('/reserve/create',[ShopController::class,'reserve'])->name('reserve.create');
Route::get('auth/thanks',[RegisterController::class,'thanks'])->name('thanks');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('auth.home');
