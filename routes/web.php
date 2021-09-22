<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrxController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/prxconsole',[\App\Http\Controllers\PrxController::class, 'index'])->middleware(['auth'])->name('prxconsole');

require __DIR__.'/auth.php';
