<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $categories = [
            [
                'name' => 'Teknologi',
                'slug' => 'teknologi',
            ],
            [
                'name' => 'Kegiatan',
                'slug' => 'kegiatan',
            ],
            [
                'name' => 'Bisnis',
                'slug' => 'bisnis',
            ],
            [
                'name' => 'Pekerjaan',
                'slug' => 'pekerjaan',
            ],
            [
                'name' => 'Pendidikan',
                'slug' => 'pendidikan',
            ],
            [
                'name' => 'Berita',
                'slug' => 'berita',
            ],
        ];


        User::factory(3)->create();
        Post::factory(15)->create();

        foreach ($categories as $category) {
            Category::create($category);
        }




    }
}
