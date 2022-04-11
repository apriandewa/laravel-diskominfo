<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class BlogController extends BaseController
{
    public function index()
    {
        return view('blogs', [
            "title" => "Halaman Berita",
            "blogs" => Blog::latest()->get()
        ]);
    }

    public function show(Blog $blog)
    {
        return view('blog', [
            "title" => "Halaman Blog",
            "blog" => $blog
        ]);
    }
}
