<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

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
Route::get('/essai', [WelcomeController::class, 'index'])->name('essai');
// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/', 'pages.home')->name('home');

Route::view('/about-us', 'pages.about')->name('about');