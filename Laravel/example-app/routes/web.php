<?php

use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    // return ("Mithursan");
    // $marks = [
    //     "Tamil" => 25,
    //     "English" => 75,
    //     "Science" => 35
    // ];
    // return $marks;

    return view('welcome')
});
*/


Route::get('/', function () {

    $name = "Mithursan";
    $marks = [
        "Tamil" => 25,
        "English" => 75,
        "Science" => 35
    ];

    return view('welcome', [
        'data1' => $name,
        'data2' => $marks
    ]);
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
