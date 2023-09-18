<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\User\MentorController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

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
require __DIR__ . '/auth.php';

// Mengambil data dari route
function set_active($route)
{
    if (is_array($route)) {
        return in_array(Request::path(), $route) ? 'active' : '';
    }
    return Request::path() == $route ? 'active' : '';
}

//-------------guest----------------------------------------//

//----------author------------------------------------------//
Route::get('/authors/{author:username}', function (User $author) {
    return view('pages.post', [
        'title' => "Post By Author : $author->name",
        'posts' => $author->posts,
    ]);
})->name('user');

//----------- Portofolio------------------------------------//
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'showHome')->name('home');
    Route::get('/about', 'showAbout')->name('about');
    Route::get('/service', 'showService')->name('service');
    Route::get('/team', 'showTeam')->name('team');
    Route::get('/gallery', 'showGallery')->name('gallery');
    Route::get('/blogs', 'showBlog')->name('blogs');
    Route::get('/contact', 'showContact')->name('contact');
    Route::get('/blogs/{post:slug}', 'showDetailBlog')->name('blogs.post');
    Route::get('/gallery/{gallery:slug}', 'showDetailGallery')->name('gallery.detail');
});

//------------Post Category--------------------------------//
Route::controller(CategoryController::class)->group(function () {
    Route::get('/categories', 'index')->name('categories');
    Route::post('/categories/{category:slug}', 'show')->name('categories.context');
});


 // -------------------------- main dashboard ----------------------//
Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index')->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('user/profile/page', 'userProfile')->middleware('auth')->name('user/profile/page');

});

//----------- Post dashboard------------------------------------//
Route::controller(PostController::class)->group(function(){
    Route::get('post/list', 'AllPost')->middleware('auth')->name('post/list');
    Route::post('post/update', 'postUpdate')->name('post/update'); // update record post
    Route::post('post/delete', 'postDelete')->name('post/delete'); // delete record post
});


// ------------------------ setting -------------------------------//
Route::controller(Setting::class)->group(function () {
    Route::get('setting/page', function(){
        return view('dashboard.components.setting.settings');
    })->middleware('auth')->name('setting/page');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
