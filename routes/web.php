<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\HeaderController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\ReviewController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\ServiceController;
;

Auth::routes(['register'=>false]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home',[HomeController::class,'index'] );
Route::get('/logout',[HomeController::class,'Logout'] );
Route::resource('banner', HeaderController::class);
Route::resource('back_about', AboutController::class);
Route::resource('back_team', TeamController::class);
Route::resource('back_review', ReviewController::class);
Route::resource('back_service', ServiceController::class);
Route::resource('back_project', ProjectController::class);
Route::resource('back_contact', ContactController::class);



Route::get('/',[FrontController::class,'index'] );
Route::get('/about',[FrontController::class,'about'] );
Route::get('/team',[FrontController::class,'team'] );
Route::get('/review',[FrontController::class,'review'] );
Route::get('/services',[FrontController::class,'services'] );
Route::get('/services_details',[FrontController::class,'services_details'] );
Route::get('/project',[FrontController::class,'project'] );
Route::get('/contact',[FrontController::class,'contact'] );
Route::post('/form',[FrontController::class,'form'] );


