<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{



    public function index(){
        return view('pages.blogs', [
            "title" => "All Blogs",
            // "posts" => Post::all()
            "posts" => Post::with('author','category')->latest()->get()

        ]);
    }
    public function showResume(){
        include public_path('php/data.php');
        return view('pages.about', [
            "title" => "About",
            "experience" => $resume["experience"],
            "education" => $resume["education"],
        ]);
    }

    public function show(Post $post){
        return view('pages.post', [
            "title" => "Single Post",
            "posts" => $post,

        ]);
    }
}
