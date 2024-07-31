<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/{page?}', function ($page = 'index') {
    return view("pages/" . $page);
});
*/

Route::get('/photo', function () {
    return view('pages.photo');
});

Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/blog', function () {
    return view('pages.post');
});
