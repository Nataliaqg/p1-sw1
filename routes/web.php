<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\EventPhotographerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SaaSView;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPhotographyController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\EventPhotographer\RequestEventPhotographer;
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

Route::get('/snapMatch',[SaaSView::class,'index'])->name('snapMatch.index');

Route::get('/', function () {
    return redirect(route('snapMatch.index'));
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/eventPhotographer', [EventPhotographerController::class, 'index'])->name('eventPhotographer.index');

    Route::get('/faceid', [EventPhotographerController::class, 'faceid'])->name('faceid.index');

    Route::get('/user', [UserController::class, 'index'])->name('user.index');

    Route::group(['prefix'=>'event'],function(){
        Route::get('/',[EventController::class,'index'])->name('event.index');
        Route::get('/invitation/{event_id}',[EventController::class,'acceptInvitation'])->name('event.invitation');
        Route::get('/show/{event_id}',[EventController::class,'show'])->name('event.show');
    });

    Route::get('/request', [EventPhotographerController::class, 'request'])->name('request.index');

    Route::get('/purchase', [UserPhotographyController::class, 'index'])->name('purchase.index');
    
});



