<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home', ['title'  => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Franshel Tranetha', 'title' => 'About']);
});

Route::get('/blog', function () {
    return view('blog', ['title'  => 'Blog']);
});

Route::get('/contact', function () {
    return view('contact', ['title'  => 'Contact']);
});