<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'pages.home')->name('welcome');
Route::view('/test', 'test')->name('test');
Route::view('/gallery', 'pages.gallery')->name('gallery');
Route::view('/blog', 'pages.blog')->name('blog');
Route::view('/services', 'pages.services')->name('services');
Route::view('/fqa', 'pages.fqa')->name('fqa');
Route::view('/our-team', 'pages.our-team')->name('our-team');
Route::view('/about-us', 'pages.about-us')->name('about-us');
Route::view('/contact-us', 'pages.contact-us')->name('contact-us'); 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
