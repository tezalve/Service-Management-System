<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestlteController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [TestlteController::class, 'home']);
Route::get('/welcome', [TestlteController::class, 'welcome']);
Route::get('/admin', [TestlteController::class, 'admin_template']);
