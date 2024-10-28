<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Davina Putri Kusuma', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' =>
    [
        [
            'id' => '1',
            'slug' => 'judul-artikel-1',
            'title' => 'Artikel 1',
            'author' => 'Davina Putri Kusuma',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima eligendi, sit ducimus vero, fugiat perspiciatis cumque sapiente ut placeat iusto beatae! Voluptate cupiditate optio provident ipsam numquam quam obcaecati architecto?'
        ],
        [
            'id' => '2',
            'slug' => 'judul-artikel-2',
            'title' => 'Artikel 2',
            'author' => 'Davina Putri Kusuma',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis enim ipsum laudantium expedita placeat labore autem excepturi inventore fugiat nisi quaerat, cum eaque tempore delectus perferendis vitae. Beatae, ea atque!'
        ],
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => '1',
            'slug' => 'judul-artikel-1',
            'title' => 'Artikel 1',
            'author' => 'Davina Putri Kusuma',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima eligendi, sit ducimus vero, fugiat perspiciatis cumque sapiente ut placeat iusto beatae! Voluptate cupiditate optio provident ipsam numquam quam obcaecati architecto?'
        ],
        [
            'id' => '2',
            'slug' => 'judul-artikel-2',
            'title' => 'Artikel 2',
            'author' => 'Davina Putri Kusuma',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis enim ipsum laudantium expedita placeat labore autem excepturi inventore fugiat nisi quaerat, cum eaque tempore delectus perferendis vitae. Beatae, ea atque!'
        ],
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);

});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
