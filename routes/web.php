<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/resume', [PostController::class, "showResume"]);

Route::get('/projects', [PostController::class,'index']);
//halaman single post
Route::get('projects/{post:slug}', [PostController::class,'show']);

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact"
    ]);
});

Route::get('/other', function () {
    return view('other', [
        "title" => "Other"
    ]);
});

Route::get('/categories/{category::slug}',[CategoryController::class,'show']);


