<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Models\Category;
use App\Models\User;

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
    return view('home', [
        "title" => "Beranda",
        "image" => "logokominfo.png"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "Profil",
        "name" => "Dinas Kominfo Kab. Inhu",
        "email" => "diskominfo@inhukab.go.id",
        "image" => "logokominfo.png"
    ]);
});

Route::get('/blogs', [BlogController::class, 'index']);

Route::get('/blogs/{blog:slug}', [BlogController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Kategori Berita',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('blogs', [
        'title' => "Kategori Berita : $category->name",
        'blogs' => $category->blogs->load('category', 'author'),

    ]);
});


Route::get('/authors/{author:username}', function (User $author) {
    return view('blogs', [
        'title' => "Penulis Berita : $author->name",
        'blogs' => $author->blogs->load('category', 'author'),

    ]);
});
