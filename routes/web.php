<?php

use Illuminate\Support\Facades\Route;

Route::view(uri: '/', view: 'home')->name(name: 'home');

Route::view(uri: '/second', view: 'second')->name(name: 'second');

Route::view(uri: '/contact', view: 'contact')->name(name: 'contact');

Route::view(uri: '/about', view: 'about')->name(name: 'about');
