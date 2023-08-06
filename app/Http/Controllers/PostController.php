<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    private $data;

    public function __construct()
    {
        $this->data = include public_path('php/data.php');

    }

    public function showHome()
    {
        return view('pages.home', [
            "title" => "Home",
            "service" => $this->data["home"]["service"],
        ]);
    }

    public function showTeam($dataFromSheet)
    {
        return view('pages.team', [
            "title" => "Team",
            "img" => "teamsesi.jpeg",
            'teamData' => $dataFromSheet
        ]);
    }


    public function showGallery()
    {
        return view('pages.gallery', [
            "title" => "Gallery",
            "img" => "gallery.jpg",
            "service" => $this->data["home"]["service"],
        ]);
    }
    public function showBlog()
    {
        return view('pages.blogs', [
            "title" => "All Blogs",
            // "posts" => Post::all()
            "posts" => Post::latest()->get()
        ]);
    }

    public function showAbout()
    {
        return view('pages.about', [
            "title" => "About",
            "img" => "aboutsesi.jpeg",
            "service" => $this->data["home"]["service"],
            "experience" => $this->data["about"]["experience"],
            "education" => $this->data["about"]["education"],
        ]);
    }
    public function showContact()
    {
        return view('pages.contact', [
            "title" => "Contact"
        ]);
    }

    public function show(Post $post)
    {
        return view('pages.post', [
            "title" => "Single Post",
            "posts" => $post,
        ]);
    }
}
