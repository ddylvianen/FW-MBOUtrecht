<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('about-us', 'about_us')->name('about_us');

Route::get('contact', [App\Http\Controllers\ContactController::class, 'showForm'])->name('contact');
Route::post('contact', [App\Http\Controllers\ContactController::class, 'submitForm'])->name('contact.submit');

Auth::routes();

Route::resource('products', App\Http\Controllers\ProductController::class);




// Route::middleware(['auth'])->group(function () {
//     Route::resource('products', App\Http\Controllers\ProductController::class);
//     Route::resource('orders', App\Http\Controllers\OrderController::class);
//     Route::resource('users', App\Http\Controllers\UserController::class)->middleware('role:Admin');
// });

