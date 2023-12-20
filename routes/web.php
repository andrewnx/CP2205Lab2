<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoriesController;

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

Route::get('/', [CategoriesController::class, 'index'])->name('categories.index');

// Display a list of all posts
Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');

// Display a form to create a new post
Route::get('/posts/create', [PostsController::class, 'create'])->name('posts.create');

// Store a new post to the database
Route::post('/posts', [PostsController::class, 'store'])->name('posts.store');

// Display a specific post
Route::get('/posts/{id}', [PostsController::class, 'show'])->name('posts.show');

// Display a form to edit a specific post
Route::get('/posts/{id}/edit', [PostsController::class, 'edit'])->name('posts.edit');

// Update a specific post in the database
Route::put('/posts/{id}', [PostsController::class, 'update'])->name('posts.update');

// Delete a specific post from the database
Route::delete('/posts/{id}', [PostsController::class, 'destroy'])->name('posts.destroy');

// Display a list of all categories
Route::get('/categories', [CategoriesController::class, 'index'])->name('categories.index');

// Display a form to create a new category
Route::get('/categories/create', [CategoriesController::class, 'create'])->name('categories.create');

// Store a new category to the database
Route::post('/categories', [CategoriesController::class, 'store'])->name('categories.store');

// Display a specific category
Route::get('/categories/{id}', [CategoriesController::class, 'show'])->name('categories.show');

// Display a form to edit a specific category
Route::get('/categories/{id}/edit', [CategoriesController::class, 'edit'])->name('categories.edit');

// Update a specific category in the database
Route::put('/categories/{id}', [CategoriesController::class, 'update'])->name('categories.update');

// Delete a specific category from the database
Route::delete('/categories/{id}', [CategoriesController::class, 'destroy'])->name('categories.destroy');

Route::get('categories/{category}/showposts', [CategoriesController::class, 'indexPostsByCategory'])->name('categories.showposts');

Route::resource('posts', PostsController::class);
Route::resource('categories', CategoriesController::class);
