<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\EventPhotographerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/', function () {
    return redirect(route('login'));
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/eventPhotographer', [EventPhotographerController::class, 'index'])->name('eventPhotographer.index');

    Route::get('/faceid', [EventPhotographerController::class, 'faceid'])->name('faceid.index');

    Route::get('/user', [UserController::class, 'index'])->name('user.index');

    Route::get('/event',[EventController::class,'index'])->name('event.index');
});



