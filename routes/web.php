<?php

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

Route::get('/resume', function () {
    return view('resume', [
        "title" => "Resume"
    ]);
});


Route::get('/projects', function () {

    // Request Data
    $project = [
        [
            "title" => "JAVA CRUD",
            "slug" => "java-crud",
            "author" => "Adam setiadi",
            "deskripsi" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos doloremque aliquid dolorem dolor quisquam et, repudiandae fugit qui commodi totam amet magnam incidunt quis odio, eum soluta quae iure iste.
        Deserunt nemo, commodi, natus accusamus ipsa incidunt maxime rerum saepe culpa alias nam soluta doloribus maiores perferendis quibusdam asperiores in facilis beatae necessitatibus corrupti consectetur atque voluptas hic mollitia? Quae.
        Alias officiis temporibus molestias sint fugit, obcaecati totam neque debitis asperiores laudantium explicabo reprehenderit dicta dolorum eveniet suscipit deleniti magni est vero repellat laboriosam fuga saepe culpa! Quisquam, aut nam."
        ],
        [
            "title" => "Covid python",
            "slug" => "covid-python",
            "author" => "Adam setiadi",
            "deskripsi" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos doloremque aliquid dolorem dolor quisquam et, repudiandae fugit qui commodi totam amet magnam incidunt quis odio, eum soluta quae iure iste.
        Deserunt nemo, commodi, natus accusamus ipsa incidunt maxime rerum saepe culpa alias nam soluta doloribus maiores perferendis quibusdam asperiores in facilis beatae necessitatibus corrupti consectetur atque voluptas hic mollitia? Quae.
        Alias officiis temporibus molestias sint fugit, obcaecati totam neque debitis asperiores laudantium explicabo reprehenderit dicta dolorum eveniet suscipit deleniti magni est vero repellat laboriosam fuga saepe culpa! Quisquam, aut nam."
        ],
    ];


    return view('projects', [
        "title" => "Projects",
        "project" => $project
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
Route::get('projects/{slug}', function($slug){
    // Request Data
    $project = [
        [
            "title" => "JAVA CRUD",
            "slug" => "java-crud",
            "author" => "Adam setiadi",
            "deskripsi" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos doloremque aliquid dolorem dolor quisquam et, repudiandae fugit qui commodi totam amet magnam incidunt quis odio, eum soluta quae iure iste.
        Deserunt nemo, commodi, natus accusamus ipsa incidunt maxime rerum saepe culpa alias nam soluta doloribus maiores perferendis quibusdam asperiores in facilis beatae necessitatibus corrupti consectetur atque voluptas hic mollitia? Quae.
        Alias officiis temporibus molestias sint fugit, obcaecati totam neque debitis asperiores laudantium explicabo reprehenderit dicta dolorum eveniet suscipit deleniti magni est vero repellat laboriosam fuga saepe culpa! Quisquam, aut nam."
        ],
        [
            "title" => "Covid python",
            "slug" => "covid-python",
            "author" => "Adam setiadi",
            "deskripsi" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos doloremque aliquid dolorem dolor quisquam et, repudiandae fugit qui commodi totam amet magnam incidunt quis odio, eum soluta quae iure iste.
        Deserunt nemo, commodi, natus accusamus ipsa incidunt maxime rerum saepe culpa alias nam soluta doloribus maiores perferendis quibusdam asperiores in facilis beatae necessitatibus corrupti consectetur atque voluptas hic mollitia? Quae.
        Alias officiis temporibus molestias sint fugit, obcaecati totam neque debitis asperiores laudantium explicabo reprehenderit dicta dolorum eveniet suscipit deleniti magni est vero repellat laboriosam fuga saepe culpa! Quisquam, aut nam."
        ],
    ];


    $new_post=[];
    foreach($project as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
