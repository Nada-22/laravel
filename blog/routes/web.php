<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nada', function () {
    return view('welcom2');
});



Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/posts/create',[PostController::class, 'create'])->name('posts.create');

Route::post('/posts',[PostController::class, 'store'])->name('posts.store');

Route::get('/posts/edit',[PostController::class, 'edit'])->name('posts.edit');

Route::put('/posts',[PostController::class, 'update'])->name('posts.update');

Route::get('/posts/{view}',[PostController::class, 'show'])->name('posts.show');

