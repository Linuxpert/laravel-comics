<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('views.main');
}) -> name('main');

Route::get('comic', function () {
    return view('views.comic');
}) -> name('comic');
