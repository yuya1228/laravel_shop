<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\UserController;


Route::get('/', [ShopController::class, 'index'])->name('shops.index');
Route::get('/detail/{shop_id}', [ShopController::class, 'detail'])->name('shops.detail');
Route::get('done', [ShopController::class, 'done'])->name('shops.done');
Route::post('/reserve/store/{shop_id}', [ShopController::class, 'reserve'])->middleware(['auth'])->name('reserve.store');
Route::get('auth/thanks', [RegisteredUserController::class, 'thanks'])->name('thanks');
Route::get('/mypage', [UserController::class, 'mypage'])->middleware(['auth'])->name('user.mypage');

Route::post('/like/{shops}', [ShopController::class, 'like'])->middleware(['auth'])->name('like');
Route::post('/unlike/{shops}', [ShopController::class, 'unlike'])->middleware(['auth'])->name('unlike');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
