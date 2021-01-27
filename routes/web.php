<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\MarqueController;
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




  Route::get('/stock', [StockController::class, 'indexStock'])->name('indexStock');
  Route::get('/stock/create', [StockController::class, 'createStock'])->name('createStock');
  Route::post('/stock', [StockController::class, 'storeStock'])->name('storeStock');
  Route::get('/stock/{id}/edit', [StockController::class, 'editStock'])->name('editStock');
  Route::post('/stock/{id}', [StockController::class, 'updateStock'])->name('updateStock');
  Route::delete('/stock/{id}', [StockController::class, 'deleteStock'])->name('deleteStock');

  
  Route::get('/factures', [PageController::class, 'indexFactures'])->name('indexFactures');
  Route::post('/factures', [PageController::class, 'storeFactures'])->name('storeFactures');

  Route::get('/stats', [PageController::class, 'indexStats'])->name('indexStats');
  Route::post('/stats', [PageController::class, 'storeStats'])->name('storeStats');

  Route::get('/clients', [ClientController::class, 'indexClient'])->name('indexClient');
  Route::get('/clients/create', [ClientController::class, 'createClient'])->name('createClient');
  Route::post('/clients', [ClientController::class, 'storeClient'])->name('storeClient');
  Route::get('/clients/{id}/edit', [ClientController::class, 'editClient'])->name('editClient');
  Route::post('/clients/{id}', [ClientController::class, 'updateClient'])->name('updateClient');
  Route::delete('/clients/{id}', [ClientController::class, 'deleteClient'])->name('deleteClient');

  Route::get('/marques', [MarqueController::class, 'indexMarque'])->name('indexMarque');
  Route::get('/marques/create', [MarqueController::class, 'createMarque'])->name('createMarque');
  Route::post('/marques', [MarqueController::class, 'storeMarque'])->name('storeMarque');
  Route::get('/marques/{id}/edit', [MarqueController::class, 'editMarque'])->name('editMarque');
  Route::post('/marques/{id}', [MarqueController::class, 'updateMarque'])->name('updateMarque');
  Route::delete('/marques/{id}', [MarqueController::class, 'deleteMarque'])->name('deleteMarque');
});