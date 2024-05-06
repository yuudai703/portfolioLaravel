<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ContactController;

Route::get('/',[WelcomeController::class,'index']);
Route::get('/blog',[blogController::class,'documentsGet'])->name('documentsGet');
Route::get('/blog/create',[blogController::class,'create']);
Route::post('/blog/store',[blogController::class,'store'])->name('blogsStore');
Route::get('/blog/show/{id}',[blogController::class,'documentShow'])->name('blogShow');

Route::get('/blog/edit/{id}',[blogController::class,'edit']);

Route::put('/blog/edit/update',[blogController::class,'update']);
Route::post('/contacts/store',[ContactController::class,'store']);

Route::get('/contacts/index',[ContactController::class,'index']);
