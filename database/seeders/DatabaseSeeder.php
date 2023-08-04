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
        User::factory(3)->create();
        Post::factory(15)->create();
        // User::create([
        //     'name' => 'Adam Setiadi',
        //     'email' => 'adam@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'Web Programming',
        ]);


        // Post::create([
        //     'title' => 'judul pertama',
        //     'slug' => 'judul-pertama',
        //     'category_id' => 1,
        //     'user_id'=> 1,
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat esse officia consectetur assumenda dolor blanditiis aliquid ea ab temporibus delectus quas, ducimus corrupti facilis laudantium dolores quasi eos debitis repudiandae!Non ipsa optio hic sit eum numquam inventore animi maiores provident, eos totam deserunt commodi consequuntur voluptas a iste error aspernatur laboriosam repudiandae aliquid aperiam asperiores. Neque laboriosam non quaerat!',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat esse officia consectetur assumenda dolor blanditiis aliquid ea ab temporibus delectus quas, ducimus corrupti facilis laudantium dolores quasi eos debitis repudiandae!Non ipsa optio hic sit eum numquam inventore animi maiores provident, eos totam deserunt commodi consequuntur voluptas a iste error aspernatur laboriosam repudiandae aliquid aperiam asperiores. Neque laboriosam non quaerat!'
        // ]);

        // Post::create([
        //     'title' => 'judul kedua',
        //     'slug' => 'judul-kedua',
        //     'category_id' => 2,
        //     'user_id'=> 1,
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat esse officia consectetur assumenda dolor blanditiis aliquid ea ab temporibus delectus quas, ducimus corrupti facilis laudantium dolores quasi eos debitis repudiandae!Non ipsa optio hic sit eum numquam inventore animi maiores provident, eos totam deserunt commodi consequuntur voluptas a iste error aspernatur laboriosam repudiandae aliquid aperiam asperiores. Neque laboriosam non quaerat!',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat esse officia consectetur assumenda dolor blanditiis aliquid ea ab temporibus delectus quas, ducimus corrupti facilis laudantium dolores quasi eos debitis repudiandae!Non ipsa optio hic sit eum numquam inventore animi maiores provident, eos totam deserunt commodi consequuntur voluptas a iste error aspernatur laboriosam repudiandae aliquid aperiam asperiores. Neque laboriosam non quaerat!'
        // ]);


    }
}
