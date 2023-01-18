<?php

use App\Http\Controllers\PostController;
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

Route::view('/', 'home')->name('home');
Route::view('/contact', 'contact')->name('contact');
Route::get('/posts.index', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts.index/{post}', [PostController::class, 'show'])->name('posts.show');
Route::view('/about', 'about')->name('about');