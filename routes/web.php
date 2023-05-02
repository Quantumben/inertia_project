<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::inertia('/', 'Welcome');

Route::get('post', [PostController::class, 'getPosts']);

Route::inertia('storePost', 'Posts/Create');
Route::post('storePost', [PostController::class, 'storePost']);