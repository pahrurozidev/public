<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
use App\Models\Category;
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

Route::get('/', [PostController::class, 'index']);


Route::get('/signup', [SignupController::class, 'index']);

Route::get('/signin', [SigninController::class, 'index']);
