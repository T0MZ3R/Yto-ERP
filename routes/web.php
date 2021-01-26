<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
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
  Route::post('/', [LoginController::class, 'processing'])->name('processing');
});


Route::middleware('auth')->group(function (){
  Route::get('/signout', [LoginController::class, 'signout'])->name('signout');

  Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

  Route::get('/stock', [PageController::class, 'indexStock'])->name('indexStock');
  Route::post('/stock', [PageController::class, 'storeStock'])->name('storeStock');

  Route::get('/factures', [PageController::class, 'findexFactures'])->name('indexFactures');
  Route::post('/factures', [PageController::class, 'storeFactures'])->name('storeFactures');

  Route::get('/stats', [PageController::class, 'indexStats'])->name('indexStats');
  Route::post('/stats', [PageController::class, 'storeStats'])->name('storeStats');

  Route::get('/clients', [PageController::class, 'indexClients'])->name('indexClients');
  Route::post('/clients', [PageController::class, 'storeClients'])->name('storeClients');

  Route::get('/marques', [PageController::class, 'indexMarques'])->name('indexMarques');
  Route::post('/marques', [PageController::class, 'storeMarques'])->name('storeMarques');
});