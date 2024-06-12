<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/test/add', function () {
    return view('add_music');
});

Route::get('/test/remove', function () {
    return view('remove_music');
});