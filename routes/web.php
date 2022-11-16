<?php

use App\Http\Controllers\ApplicationController;
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

Route::get('/', [ApplicationController::class, 'homePage'])->name('home');

Route::get('/our-recipe', [ApplicationController::class, 'ourRecipe'])->name('recipe');

Route::get('/our-chef', [ApplicationController::class, 'ourChef'])->name('chef');

Route::get('/about', [ApplicationController::class, 'about'])->name('about');
