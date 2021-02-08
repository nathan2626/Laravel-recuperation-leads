<?php

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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'show'])->name('contact.form');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');

Route::get('/admin/index', [App\Http\Controllers\AdminController::class, 'index'])->name('index');
