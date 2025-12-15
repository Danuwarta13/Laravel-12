<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;


Route::get('/', function () {
    return view('home', ['title' => 'Home page']);
});

Route::get('/posts', function () {

    $posts = Post::all();

    // dd($posts);
    return view('posts', ['title' => 'Blog page', 'posts' => $posts]);
});

Route::get('/posts/{post:slug}', function (Post $post) {

    // $post = Post::find($id);

    // dd($post);

    // if (!$post) {
    //     return abort(404);
    // }

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});