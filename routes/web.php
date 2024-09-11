<?php

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
    return view('posts', 
    [
        'posts' => [
        [
            'id' => 1,
            'title'=> 'Judul Artikel 1',
            'author' => 'Niki Dwijananto',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In quas mollitia dolorem saepe eos sapiente voluptatum soluta error non veniam at iste beatae quaerat, commodi temporibus distinctio sequi nihil explicabo.'
        ],
        [
            'id' => 2,
            'title'=> 'Judul Artikel 2',
            'author' => 'Niki Dwijananto',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem cumque, ipsum natus facilis voluptatum quam sunt laboriosam, velit illo amet deserunt voluptate iste soluta molestiae ut, ipsa ad sapiente quisquam.'
        ]
        ],
        'title' => 'My Blog'
    ]);
});


Route::get('posts/{id}', function ($id) {
    $posts = ['
    
    '];
});

Route::get('/contact', function () {
    return view('contact', [
        'nama' => 'Niki',
        'title' => 'My Contact'
    ]);
});
