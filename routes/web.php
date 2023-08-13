<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::get('/', [PostController::class, "showHome"]);
Route::get('/about', [PostController::class, "showAbout"]);
Route::get('/team', [PostController::class, "showTeam"]);
Route::get('/gallery', [PostController::class,'showGallery']);
Route::get('/blogs', [PostController::class,'showBlog']);
Route::get('/contact', [PostController::class, "showContact"]);
//halaman single post
Route::get('/blogs/{post:slug}', [PostController::class,'show']);

Route::get('/other', function () {
    return view('pages.other', [
        "title" => "Other"
    ]);
});
Route::get('/gallery/{gallery:slug}', [PostController::class,'showDetailGallery']);
Route::get('/categories',[CategoryController::class,'index']);


