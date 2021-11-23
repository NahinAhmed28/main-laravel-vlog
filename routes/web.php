<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\GroupController;

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
    return view('home');
});



Route::resource('categories', CategoryController::class);
Route::resource('posts', PostController::class);
Route::resource('comments', CommentController::class);
Route::resource('users', UserController::class);
Route::resource('members', MemberController::class);
Route::resource('groups', GroupController::class);
Route::get('contact/create/new' ,  [ContactController::class, 'newCreate'])->name('new.contact');
Route::middleware(['admin'])->group(function () {
    Route::resource('contacts', ContactController::class);
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

