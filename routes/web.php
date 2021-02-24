<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

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

Route::get('/subCategory/{category}', [HomeController::class, 'showsubcategory'])->name('subCategory');

 Route::get('/allArticles/{id}', [HomeController::class, 'showall'])->name('allArticles');

 Route::get('/show/{id}/{article_title?}', [HomeController::class, 'article'])->name('show');
 
 Route::get('/assistence',[HomeController::class, 'assistenza'])->name('assistenza');
 Route::get('/mailpage',[HomeController::class, 'mailshow'])->name('mail.mailpage');

 Route::get('/dataArticles', [CategoryController::class, 'dataArticles'])->name('dataArticles');

 Route::get('/searchPage', [CategoryController::class, 'search'])->name('searchPage');

 Route::get('/searchForm', [CategoryController::class, 'searchform'])->name('searchForm');


// Route::get('/articlesSubcategory/{subcategory}',[CategoryController::class, 'showSubcategory'])->name('articlesSubcategory');




// Route::get('/show/{id}/{article_title?}', [HomeController::class, 'article'])->name('show');
// Route::get('/articlesCategory/{category}',[CategoryController::class, 'show'])->name('articlesCategory');



Auth::routes();





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
