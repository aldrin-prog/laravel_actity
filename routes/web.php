<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index']);
Route::get('/contact', [MainController::class, 'contact']);
Route::get('/about', [MainController::class, 'about']);
Route::get('/pricing', [MainController::class, 'pricing']);
Route::get('/services', [MainController::class, 'services']);
Route::get('category/{any}', [MainController::class, 'showCategory'])->name('category.posts');
Route::get('user/{id}',[MainController::class, 'showProfile'])->name('user.profile');

