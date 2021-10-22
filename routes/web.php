<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    App\Http\Controllers\HomeController::class, 'userWelcome'
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

Route::get('/posts', function () {
    return view('posts');
})->name('site.posts');

Route::get('/posts/{post_id}', [HomeController::class, 'single'])
    ->name('site.posts.single');
