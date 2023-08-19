<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GoogleSheetController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PostController::class, 'showHome']);
Route::get('/about', [PostController::class, 'showAbout']);
Route::get('/team', [PostController::class, 'showTeam']);
Route::get('/gallery', [PostController::class, 'showGallery']);
Route::get('/blogs', [PostController::class, 'showBlog']);
Route::get('/contact', [PostController::class, 'showContact']);
//halaman single post
Route::get('/blogs/{post:slug}', [PostController::class, 'show']);

Route::get('/gallery/{gallery:slug}', [PostController::class, 'showDetailGallery']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authentication']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

