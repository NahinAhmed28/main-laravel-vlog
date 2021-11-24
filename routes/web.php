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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');




Route::get('contact/create/new' ,  [ContactController::class, 'newCreate'])->name('new.contact');

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

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

