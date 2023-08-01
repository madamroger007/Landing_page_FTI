<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('projects', [
            "title" => "Projects",
            "posts" => Post::all()
        ]);
    }

    public function show(Post $post){
        return view('post', [
            "title" => "Single Post",
            "posts" => $post
        ]);
    }
}
