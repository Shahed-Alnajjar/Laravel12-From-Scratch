<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::view('/', 'home')->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home'); 
Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');


 
// Route::get('posts/{postId}', [PostController::class, 'show'])->name('post.show'); 
Route::get('posts/{postId}', [\App\Http\Controllers\PostController::class, 'show'])->name('post.show'); 
