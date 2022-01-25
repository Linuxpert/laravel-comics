<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'MainController@home') -> name('main');

Route::get('comic', 'ComicController@comic') -> name('comic');
