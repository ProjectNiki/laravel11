<?php


use App\Models\post;

/** 
 * ! memanggil controller Post
 */

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home Page'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About Me'
    ]);
});

Route::get('/posts', function () {
    return view(
        'posts',
        [
            'title' => 'My Blog',
            'posts' => post::all()
        ]
    );
});

Route::get('posts/{post:slug}', function (post $post) {

    return view('post', [
        'title' => 'single post',
        'post' => $post
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'nama' => 'Niki',
        'title' => 'My Contact'
    ]);
});
