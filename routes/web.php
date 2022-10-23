<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

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
// Show all posts
Route::get('/posts', [PostController::class,'index'])->name('posts.index');

// create new post
Route::get('/posts/create',[PostController::class,'create'])->name('posts.create');

// store new post
Route::post('/posts',[PostController::class,'store'])->name('posts.store');

// show data of post
Route::get('/posts/{post}',[PostController::class,'show'])->name('posts.show');

// Edit new Post
Route::get('/posts/{post}/edit',[PostController::class,'edit'])->name('posts.edit');
// Route::resource('posts', 'PostController');

// Update New Post
Route::patch('/posts/{post}',[PostController::class,'update'])->name('posts.update');

// Delete New Post
Route::delete('/posts/{post}',[PostController::class,'destroy'])->name('posts.destroy');//{{route(name of route)}} in blade
//************ */
// store new Comment
Route::post('/comments',[CommentController::class,'store'])->name('comments.store');
// Edit new Comment
Route::get('comments/{comment}/edit',[CommentController::class,'edit'])->name('comments.edit');
// Update New Comment
Route::put('/comments/{comment}',[CommentController::class,'update'])->name('comments.update');
// Delete New Comment
Route::delete('/comments/{comment}',[CommentController::class,'destroy'])->name('comments.destroy');//{{route(name of route)}} in blade

