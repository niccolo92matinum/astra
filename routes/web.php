<?php

use Illuminate\Support\Facades\Route;


use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DownloadController;

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
Route::get('/foo', function () {
    Artisan::call('storage:link');
})->name('io');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/masterCategory/{id}', [HomeController::class, 'showMaster'])->name('masterCategory');

Route::get('/subCategory/{category}', [HomeController::class, 'showsubcategory'])->name('subCategory');


 Route::get('/allArticles/{id}', [HomeController::class, 'showall'])->name('allArticles');


 Route::get('/show/{id}/{article_title?}', [HomeController::class, 'article'])->name('show');
 
 Route::get('/assistence',[HomeController::class, 'assistenza'])->name('assistenza');
 
 Route::get('/dataArticles', [CategoryController::class, 'dataArticles'])->name('dataArticles');

 Route::get('/searchPage', [CategoryController::class, 'search'])->name('searchPage');

 Route::get('/searchForm', [CategoryController::class, 'searchform'])->name('searchForm');
// rotte email
 Route::get('/mailpage',[HomeController::class, 'mailshow'])->name('mail.mailpage');

 Route::post('/mail/send',[HomeController::class, 'mailsend'])->name('email.send');

//Rotta per fare il download del file in pdf
 Route::get('/download/{id}',[DownloadController::class, 'download'])->name('download');


//  commento  A CAZZUM

Auth::routes();


