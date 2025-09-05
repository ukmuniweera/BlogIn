<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. 
| Routes are organized for clarity and maintainability.
|
*/

// Public Routes
Route::get('/', [PostController::class, 'show'])->name('post.show');

Route::get('/register', fn() => view('register'))->name('register.form');
Route::post('/register', [UserController::class, 'register'])->name('user.register');

Route::get('/login', fn() => view('login'))->name('login.form');
Route::post('/login', [UserController::class, 'login'])->name('user.login');

// Protected Routes (requires login)
Route::middleware('auth')->group(function () {

    // Dashboard
    Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');

    // User actions
    Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
    Route::get('/delete', [UserController::class, 'delete'])->name('user.delete');

    Route::get('/update', fn() => view('update'))->name('update.form');
    Route::post('/update', [UserController::class, 'update'])->name('user.update');

    // Posts
    Route::prefix('post')->name('post.')->group(function () {
        Route::get('card/{postId}', [PostController::class, 'card'])->name('card');
        Route::get('edit/{postId}', [PostController::class, 'edit'])->name('edit');
        Route::post('update/{postId}', [PostController::class, 'update'])->name('update');
        Route::get('delete/{postId}', [PostController::class, 'delete'])->name('delete');
        Route::post('create', [PostController::class, 'create'])->name('create');
    });

    // All posts
    Route::get('/allposts', fn() => view('allPosts'))->name('allPosts');
    Route::get('/getall', [PostController::class, 'getall'])->name('post.getall');
});
