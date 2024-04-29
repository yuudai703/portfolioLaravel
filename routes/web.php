<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ContactController;

Route::get('/',[WelcomeController::class,'index']);
Route::get('/blog',[blogController::class,'documentsGet']);
Route::get('/blog/create',[blogController::class,'create']);
Route::post('/blog/store',[blogController::class,'store'])->name('blogsStore');
Route::get('/blog/show/{id}',[blogController::class,'documentShow']);
Route::post('/contacts/store',[ContactController::class,'store']);
