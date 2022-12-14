<?php
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

//Frontend Route
Route::get('/',[HomeController::class,'home'])->name('home');

//Backend Route

//Login Route
Route::get('login',[AuthController::class,'login'])->name('login');
Route::post('login',[AuthController::class,'loginCheck'])->name('login.store');
//Registration route
Route::get('register',[AuthController::class,'register'])->name('register');
Route::post('register',[AuthController::class,'registerStore'])->name('register.store');
//Forgot Password Route
Route::get('forgot-password',[AuthController::class,'forgotPassword'])->name('forgot_password');
Route::post('forgot-password',[AuthController::class,'forgotPasswordSend'])->name('forgot_password.send');
Route::get('feedback',[AuthController::class,'forgotPasswordFeedback'])->name('forgot_password.feedback');
Route::get('reset-password',[AuthController::class,'resetPassword'])->name('reset_password');
Route::post('password-change',[AuthController::class,'passwordChange'])->name('password.change');
//Logout Route
Route::post('logout',[AuthController::class,'logout'])->name('logout');
//Dashboard Route
Route::get('dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
