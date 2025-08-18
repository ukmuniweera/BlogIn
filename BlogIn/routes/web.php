<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\userController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PostController::class, 'show'])->name('post.show');

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [userController::class, 'register'])->name('user.register');

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [userController::class, 'login'])->name('user.login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/logout', [userController::class, 'logout'])->name('user.logout');

Route::get('/delete', [userController::class, 'delete'])->name('user.delete');

Route::get('/update', function () {
    return view('update');
})->name('update');

Route::post('/update', [userController::class, 'update'])->name('user.update');

// post

Route::get('post/card/{postId}', [PostController::class, 'card'])->name('post.card');

Route::post('/create', [PostController::class, 'create'])->name('post.create');

Route::get('/allposts', function () {
    return view('allPosts');
})->name('allPosts');

Route::get('/getall', [PostController::class, 'getall'])->name('post.getall');

Route::get('post/edit/{postId}', [PostController::class, 'edit'])->name('post.edit');

Route::post('/post/update/{postId}', [PostController::class, 'update'])->name('post.update');

Route::get('post/delete/{postId}', [PostController::class, 'delete'])->name('post.delete');
