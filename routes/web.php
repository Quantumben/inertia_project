<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\PostController;

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

Route::inertia('post', 'Posts/Index')->name('post');

// Route::post('post', [PostController::class, 'store'])
//     ->name('register.post');