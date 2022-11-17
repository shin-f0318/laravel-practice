<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/practice/index', [ContactController::class, 'index'])->middleware('auth')->name('practice.index');
Route::get('/practice/contact', [ContactController::class, 'contact'])->middleware('auth')->name('practice.contact');
Route::post('/practice/confirm', [ContactController::class, 'confirm'])->middleware('auth')->name('practice.confirm');
Route::post('/practice/contact', [ContactController::class, 'store'])->middleware('auth')->name('practice.store');
Route::get('/practice/edit/{content}', [ContactController::class, 'edit'])->middleware('auth')->name('practice.edit');
Route::patch('/practice/update/{content}', [ContactController::class, 'update'])->middleware('auth')->name('practice.update');
Route::get('/practice/delete/{content}', [ContactController::class, 'destroy'])->middleware('auth')->name('practice.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
