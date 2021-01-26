<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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



Route::middleware('guest')->group(function (){
  Route::get('/', [LoginController::class, 'login'])->name('login');
});


Route::middleware('auth')->group(function (){
  Route::get('/signout', [LoginController::class, 'signout'])->name('signout');

  Route::get('/dashboard', function (){
    return view('pages/dashboard');
  })->name('dashboard');
});