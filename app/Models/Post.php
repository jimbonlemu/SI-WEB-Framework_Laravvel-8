<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Iqbal Maulana",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore illum suscipit mollitia veritatis. Enim tempore accusantium nostrum deserunt. Esse, distinctio, soluta cum tempore dicta provident, nobis deleniti sequi dolor quod modi libero sapiente quidem autem! Odit maiores sapiente fugiat repellat voluptate, maxime soluta reiciendis aperiam ipsa architecto! Iure tempora quod reiciendis et. Vero sapiente debitis fugit nihil repellendus accusamus laborum eveniet velit voluptas? Sequi, ipsam dolorem. Quis laborum similique quod sapiente illum quas obcaecati quia dolores totam inventore aspernatur est itaque enim rem sequi expedita impedit, ab dolore officia deleniti!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Roni Hitam",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint, facilis. Numquam sit ipsa, et soluta quidem tenetur. Asperiores reiciendis voluptatum pariatur, iusto quas fugit molestiae, aperiam minus vero exercitationem ipsum."
        ]
    ];
    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
       $posts = static::all();
    
       return $posts->firstWhere('slug',$slug);
    }
}
