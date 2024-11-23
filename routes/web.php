<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PostController::class,'create'])->name('post#home');
Route::get('/customer/create',[PostController::class,'create'])->name('post#createPage');
Route::post('post/create', [PostController::class,'postCreate'])->name('post#create');

Route::get('post/delete/{id}', [PostController::class,'postDelete'])->name('post#delete');

Route::get('post/updatePage/{id}',[PostController::class,'updatePage'])->name('post#updatePage');

Route::get('post/editPage/{id}',[PostController::class,'editPage'])->name('post#editPage');
Route::post('post/update',[PostController::class,'updatePost'])->name('post#updatePost');


