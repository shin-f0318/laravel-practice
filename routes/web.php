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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/practice/index', [ContactController::class, 'index'])->name('practice.index');
Route::get('/practice/contact', [ContactController::class, 'contact'])->name('practice.contact');
Route::post('/practice/confirm', [ContactController::class, 'confirm'])->name('practice.confirm');
Route::post('/practice/contact', [ContactController::class, 'store'])->name('practice.store');
Route::get('/practice/edit', [ContactController::class, 'edit'])->name('practice.edit');
Route::patch('/practice/update', [ContactController::class, 'update'])->name('practice.update');
