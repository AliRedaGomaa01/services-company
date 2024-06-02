<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SettingController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/test', 'test')->name('test');

Route::get( 'test2', function () {
// 
});

Route::view('/', 'pages.home')->name('home');
Route::view('/gallery', 'pages.gallery')->name('gallery');
Route::view('/blog', 'pages.blog')->name('blog');
Route::view('/services', 'pages.services')->name('services');
Route::view('/one-service', 'pages.services-single')->name('services.single');
Route::view('/one-blog', 'pages.blog-single')->name('blog.single');
Route::view('/faq', 'pages.faq')->name('faq');
Route::view('/joint-ventures', 'pages.joint-ventures')->name('joint-ventures'); 
Route::view('/one-joint-venture', 'pages.joint-venture-single')->name('joint-venture-single'); 
Route::view('/about-us', 'pages.about-us')->name('about-us'); 
Route::view('/contact-us', 'pages.contact-us')->name('contact-us'); 

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/dashboard')->name('dashboard.')->group(function(){

  Route::controller( HomeController::class)->group(function(){

    Route::get('/', 'index')->name('index');

    Route::get('/settings', [SettingController::class, 'edit'])->name('settings.edit');
    Route::patch('/settings', [SettingController::class, 'update'])->name('settings.update');

    Route::resource('/sliders', SliderController::class);


  });

  


});


