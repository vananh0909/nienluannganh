<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::prefix('User')->name('User.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('Home');
    Route::get('Lichkham', [UserController::class, 'lichkham'])->name('lichkham');
    Route::get('Lichkham2', [UserController::class, 'lichkham2'])->name('lichkham2');
    Route::get('Lichkham3', [UserController::class, 'lichkham3'])->name('lichkham3');
    Route::get('doctors', [UserController::class, 'doctors'])->name('doctors');
    Route::get('dichvu', [UserController::class, 'dichvu'])->name('dichvu');
    Route::get('caidattaikhoan', [UserController::class, 'Setting'])->name('Setting');
    Route::get('lichsukham', [UserController::class, 'lichsukham'])->name('lichsukham');
});
