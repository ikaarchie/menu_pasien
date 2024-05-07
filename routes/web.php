<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuPasienController;

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

Route::get('/', [MenuPasienController::class, 'index']);
Route::get('/', [MenuPasienController::class, 'getData']);
Route::post('/save', [MenuPasienController::class, 'save']);
Route::post('/exportSemua', [MenuPasienController::class, 'exportSemua']);
Route::post('/exportLantai2', [MenuPasienController::class, 'exportLantai2']);
Route::post('/exportLantai3', [MenuPasienController::class, 'exportLantai3']);
Route::post('/exportLantai4', [MenuPasienController::class, 'exportLantai4']);
Route::post('/exportLantai5', [MenuPasienController::class, 'exportLantai5']);
Route::get('/print/{id}', [MenuPasienController::class, 'print']);
Route::patch('/update/{id}', [MenuPasienController::class, 'update'])->name('menu.update');
Route::get('/delete/{id}', [MenuPasienController::class, 'delete'])->name('menu.delete');
Route::get('/search', [MenuPasienController::class, 'search'])->name('menu.search');
