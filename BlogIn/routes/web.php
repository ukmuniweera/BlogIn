<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

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

