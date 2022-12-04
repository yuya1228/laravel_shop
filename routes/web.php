<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;

Route::get('/',[ShopController::class,'index'])->name('shops.index');
Route::get('/detail/{shop_id}',[ShopController::class,'show'])->name('shop.show');
