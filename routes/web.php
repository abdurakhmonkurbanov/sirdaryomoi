<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\pageController; 
use App\Http\Controllers\NewsController; 

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

Route::get('/', [pageController::class,'index'])->name('index');

Route::post('/comments', [NewsController::class, 'save_comments']);

Route::resources([
    'page' => pageController::class
]);

Route::resources([
    'news' => NewsController::class
]);
 