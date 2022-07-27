<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', FrontendController::class);

Route::group(["middleware" => "auth"], function() {
    Route::get('dashboard', DashboardController::class)->name('dashboard.view');
    Route::resource('users', UserController::class)->except('show');
    Route::post("profiles/password/update", [ProfileController::class, "passwordUpdate"])->name("profiles.password.update");
    Route::resource('profiles', ProfileController::class)->except(['show','create','store','edit','destroy']);
}); 

Auth::routes();

//Google login
Route::get("login/google", [LoginController::class, "redirectToGoogle"])->name("login.google");
Route::get("login/google/callback", [LoginController::class, "handleGoogleCallback"]);

//Facebook login
Route::get("login/facebook", [LoginController::class, "redirectToFacebook"])->name("login.facebook");
Route::get("login/facebook/callback", [LoginController::class, "handleFacebookCallback"]);

//Github login
Route::get("login/github", [LoginController::class, "redirectToGithub"])->name("login.facebook");
Route::get("login/github/callback", [LoginController::class, "handleGithubCallback"]);

// Route::get('/me', function () {
//     Artisan::call('storage:link');
// });