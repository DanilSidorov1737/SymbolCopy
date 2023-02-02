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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index']);

Route::post('/contact/submit', [App\Http\Controllers\ContactController::class, 'send']);

Route::name('home')->get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::name('favorite')->get('/favorite', [App\Http\Controllers\FavoritesController::class, 'index']);

Route::get('/search', [App\Http\Controllers\SearchController::class, 'index'])->name('search');

Route::get('/search/all', [App\Http\Controllers\SearchControllerAll::class, 'index'])->name('all');

Route::post('/profile/delete', [App\Http\Controllers\DeleteAccountController::class, 'index']);

Route::post('/profile/change/info', [App\Http\Controllers\ChangeInfo::class, 'index']);

Route::post('/profile/change/password', [App\Http\Controllers\ChangePassword::class, 'index']);





Route::get('/faq', [App\Http\Controllers\FAQController::class, 'index']);

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index']);


Route::patch('/profile/{user}/edit', [App\Http\Controllers\ProfileController::class, 'update']);


Route::get('/profile/{user}', [App\Http\Controllers\ProfileController::class, 'index']);






