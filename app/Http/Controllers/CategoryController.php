<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use App\Models\Post;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
     {
         $this->Limit = 4;
     }

    public function index()
    {
        return view('pages.blogs', [
            "title" => 'Post Categories',
            "img" => "aboutsesi.jpeg",
            "categories" =>Category::all(),
            "posts" => Post::latest()->get(),
            "limit" =>  $this->Limit
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('pages.blogs', [
            "title" => "Category: $category->name",
            "img" => "aboutsesi.jpeg",
            "posts" => $category->post->load('category','author'),
            "posts" => Post::latest()->get(),
            "limit" =>  $this->Limit
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
