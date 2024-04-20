<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return  Post::all(['titre']);
});
Route::get('/posts',[PostController::class, 'index'])->name('post');
Route::get('/posts/{id}',[PostController::class, 'show'])->name('post.show');
Route::get('/posts/create',[PostController::class, 'create'])->name('post.create');
Route::post('/poste/store',[PostController::class, 'store'])->name('post.store');
