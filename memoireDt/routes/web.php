<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
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

Route::get('/details/{id}', [ClientController::class, 'show']);
Route::get('/graphiques/{id}', [ClientController::class, 'graphiques']);
Route::get('/tableau/{id}', [ClientController::class, 'tableau']);
Route::get('/', [ClientController::class, 'welcome']);

Route::get('/formulaire', [HomeController::class, 'create']);
Route::post('/store_maison', [HomeController::class, 'store']);
Route::get('/detail/{id}', [HomeController::class, 'show']);
Route::get('/supprimer/{id}',[HomeController::class, 'delete']);
Route::get('/edit/{id}',[HomeController::class, 'edit']);
Route::post('/update_maison/{id}',[HomeController::class, 'update']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

URL::forceScheme('https');