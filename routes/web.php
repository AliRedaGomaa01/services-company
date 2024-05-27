<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'pages.home')->name('home');
Route::view('/test', 'test')->name('test');
Route::view('/gallery', 'pages.gallery')->name('gallery');
Route::view('/blog', 'pages.blog')->name('blog');
Route::view('/services', 'pages.services')->name('services');
Route::view('/faq', 'pages.faq')->name('faq');
Route::view('/about-us', 'pages.about-us')->name('about-us'); 
Route::view('/contact-us', 'pages.contact-us')->name('contact-us'); 

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/dashboard')->name('dashboard.')->group(function(){

  Route::controller( HomeController::class)->group(function(){
    Route::get('/', 'index')->name('index');
  });

  Route::resource('/settings', SettingController::class);
  
  Route::resource('/images', SettingController::class);


});
