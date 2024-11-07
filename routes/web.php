<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {



    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/add/category/',[CategoryController::class,'index'])->name('add.category');
    Route::get('/manage/category/',[CategoryController::class,'manageCategory'])->name('manage.category');
    Route::post('/new/category/',[CategoryController::class,'store'])->name('new.category');
    Route::get('/category/status/{id}',[CategoryController::class,'status'])->name('status');
});

