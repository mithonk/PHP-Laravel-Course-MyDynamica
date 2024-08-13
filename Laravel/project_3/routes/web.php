<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('pages.index');
// });

// Route::get('/404', function () {
//     return view('pages.404');
// });

Route::get('/{page?}', function ($page = 'index') {
    return view("pages/" . $page);
});
