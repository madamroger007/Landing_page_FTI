<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::get('/', [PostController::class, "showHome"]);

Route::get('/about', [PostController::class, "showAbout"]);
Route::get('/team', function () {
    return view('pages.team', [
        "title" => "Team",
        "img" => "teamsesi.jpeg"
    ]);
});

Route::get('/blogs', [PostController::class,'showBlog']);
//halaman single post
Route::get('blogs/{post:slug}', [PostController::class,'show']);

Route::get('/contact', function () {
    return view('pages.contact', [
        "title" => "Contact"
    ]);
});

Route::get('/other', function () {
    return view('pages.other', [
        "title" => "Other"
    ]);
});

Route::get('/categories',[CategoryController::class,'index']);
Route::get('/categories/{category:slug}',[CategoryController::class,'show']);

Route::get('/authors/{author:username}',[UserController::class,'show']);


