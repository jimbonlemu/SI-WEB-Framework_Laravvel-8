<?php

use App\Models\Post;
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
    return view('post', 
    [
        "title" => "Blog",
        "post" => Post::all()
    ]);
});

Route::get('post/{slug}', function ($slug) {
    // $new_post =[];

    // foreach ($blog_posts as $posted) {
    //     if ($posted["slug"] === $slug) {
    //         $new_post = $posted;
    //     }
    // }
    return view('posts', [
        "title" => "Single Post",
        "post" => Post::find($slug)

    ]);
});
