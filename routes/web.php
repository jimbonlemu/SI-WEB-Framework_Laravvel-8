<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', ["title" => "Home"]);
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Iqballs",
        "email" => "iqbaltech29@gmail.com",
        "image" => "ireng.jpg",
        "title" => "About"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
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

    return view('post', [
        "title" => "Blog",
        "post" => $blog_posts
    ]);
});

Route::get('post/{slug}', function ($slug) {
    $blog_posts = [
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

    $new_post =[];

    foreach ($blog_posts as $posted) {
        if ($posted["slug"] === $slug) {
            $new_post = $posted;
            # code...
        }
        # code...
    }
    return view('posts', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
