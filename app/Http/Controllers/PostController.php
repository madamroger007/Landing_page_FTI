<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class PostController extends Controller
{
    protected $data;
    private $Limit;
    private $sheet;

    public function __construct()
    {
        $this->data = include public_path('php/data.php');
        $this->Limit = 4;
        $this->sheet = new GoogleSheetController();
    }

    public function showHome()
    {
        return view('pages.home', [
            'title' => 'Home',
            'active' => 'Home',
            'service' => $this->data['home']['service'],
            'posts' => Post::latest()->get(),
            'limit' => $this->Limit,
        ]);
    }

    public function showTeam()
    {
        $dataFromSheet = $this->sheet->getDataFromSheet();

        return view('pages.team', [
            'title' => 'Team',
            'active' => 'Team',
            'img' => 'teamsesi.jpeg',
            'teamData' => $dataFromSheet,
        ]);
    }

    public function showGallery()
    {
        $dataFromSheet = $this->sheet->getDataFromSheetGallery();
        return view('pages.gallery', [
            'title' => 'Gallery',
            'active' => 'Gallery',
            'img' => 'gallery.jpg',
            'service' => $this->data['home']['service'],
            'gallery' => $dataFromSheet,
        ]);
    }

    public function showDetailGallery($gallery)
    {
        $dataFromSheetByslug = $this->sheet->getDataByslugFromSheetGallery($gallery);
        return view('pages.galleryDetails', [
            'title' => 'Detail Gallery',
            'active' => 'Detail Gallery',
            'img' => 'gallery.jpg',
            'service' => $this->data['home']['service'],
            'galleri' => $dataFromSheetByslug,
        ]);
    }

    public function showBlog()
    {
        $title= '';
        if(request('category')){
            $category = Category::firstWhere('slug',request('category'));
            $title = 'in ' . $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username',request('author'));
            $title = 'by ' . $author->name;
        }

        return view('pages.blogs', [
            'title' => 'All Blogs ' . $title,
            'active' => 'All Blogs',
            'img' => 'aboutsesi.jpeg',
            // "posts" => Post::all()
            'posts' =>Post::latest()->filter(request(['search','category','author']))->paginate(8)->withQueryString(),
            'limit' => $this->Limit,
        ]);
    }

    public function showAbout()
    {
        return view('pages.about', [
            'title' => 'About',
            'active' => 'About',
            'img' => 'aboutsesi.jpeg',
            'service' => $this->data['home']['service'],
            'experience' => $this->data['about']['experience'],
            'education' => $this->data['about']['education'],
        ]);
    }
    public function showContact()
    {
        return view('pages.contact', [
            'title' => 'Contact',
            'active' => 'Contact',
        ]);
    }

    public function show(Post $post)
    {
        return view('pages.post', [
            'title' => 'Single Post',
            'active' => 'Single Post',
            'img' => 'aboutsesi.jpeg',
            'post' => $post,
            'posts' => Post::latest()->get(),
            'limit' => $this->Limit,
        ]);
    }
}
