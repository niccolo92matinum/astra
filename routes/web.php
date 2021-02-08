<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/allArticles', [HomeController::class, 'showall'])->name('allArticles');
Route::get('/show/{id}/{article_title?}', [HomeController::class, 'article'])->name('show');
Route::get('/mailpage',[HomeController::class, 'mailshow'])->name('mailpage');

Auth::routes();




