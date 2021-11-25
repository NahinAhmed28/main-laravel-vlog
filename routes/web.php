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
use App\Http\Controllers\HomeController;

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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');

Route::middleware(['admin'])->group(function () {


});

Route::middleware(['user'])->group(function () {


});



Route::middleware(['auth'])->group(function () {

    /*
     *
     */Route::get('/user', [HomeController::class, 'userHome'])->name('user.home');
    Route::get('/user/categories', [CategoryController::class, 'userIndex'])->name('user.category');
    Route::get('/user/contacts' ,  [ContactController::class, 'userContact'])->name('user.contact');
    Route::get('/user/posts' ,  [PostController::class, 'userPost'])->name('user.post');
    Route::get('/user/posts/create' ,  [PostController::class, 'userCreate'])->name('user.postCreate');
    Route::get('/user/comments' ,  [CommentController::class, 'userComment'])->name('user.comment');
    Route::get('/user/comments/create' ,  [CommentController::class, 'userCommentCreate'])->name('user.commentCreate');

});



Route::middleware(['admin','auth'])->group(function () {
    Route::resource('contacts', ContactController::class);
    Route::resource('admin/categories', CategoryController::class);
    Route::resource('admin/posts', PostController::class);
    Route::resource('admin/comments', CommentController::class);
    Route::resource('admin/users', UserController::class);
    Route::resource('admin/members', MemberController::class);
    Route::resource('admin/groups', GroupController::class);

});



Auth::routes();



