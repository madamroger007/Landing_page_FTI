<?php

namespace App\Models;


class Post
{
    private static $post = [
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

    public static function all()
    {
        return collect(self::$post);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $new_post = [];
        // foreach ($posts as $post) {
        //     if ($post["slug"] === $slug) {
        //         $new_post = $post;
        //     }
        // }
        return $posts->firstWhere('slug',$slug);
    }
}
