<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function show(User $author){
    return view('pages.blogs',[
        "title" => "Post By Author $author->name",
        "img" => "aboutsesi.jpeg",
        "post" => $author->post->load('category','author'),
        "posts" => Post::latest()->get(),
        "limit" =>  $this->Limit
    ]);
   }
}
