<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

Route::get('/resume', function () {
    return view('resume', [
        "title" => "Resume"
    ]);
});


Route::get('/projects', function () {

    return view('projects', [
        "title" => "Projects",
        "posts" => Post::all()
    ]);
});

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

//halaman single post
Route::get('projects/{slug}', function ($slug) {
    return view('post', [
        "title" => "Single Post",
        "posts" => Post::find($slug)
    ]);
});
