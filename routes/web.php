<?php

use Illuminate\Support\Facades\Route;

Route::get(uri: '/', action: [\App\Http\Controllers\HomeController::class, 'index'])->name(name: 'home');

Route::view(uri: '/second', view: 'second')->name(name: 'second');

Route::view(uri: '/contact', view: 'contact')->name(name: 'contact');

Route::view(uri: '/about', view: 'about')->name(name: 'about');

Route::get(uri: '/posts/{postId}', action: [\App\Http\Controllers\PostController::class, 'show'])->name(name: 'post.show');
