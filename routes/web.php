<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(
    [
        'register'  => true
    ]
);

Route::get('/home', [HomeController::class,'index'])->name('home');

Route::get('/profile', [ProfileController::class,'index'])->name('profile');
Route::put('/profile', [ProfileController::class,'update'])->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');
