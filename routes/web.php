<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [
    App\Http\Controllers\HomeController::class, 'userHome'
])->name('site.index');

Route::post('/register', [
    App\Http\Controllers\HomeController::class, 'userRegister'
])->name('site.index.register');

Route::get('/aaa', function () {
    return view('aaa');
})->name('site.aaa');

Route::get('/bbb', function () {
    return view('bbb');
})->name('site.bbb');

Route::get('/posts', [PostController::class, 'index'])->name('site.posts');

Route::get('/posts/{post_id}/{test?}', [HomeController::class, 'single'])->name('site.posts.single');
