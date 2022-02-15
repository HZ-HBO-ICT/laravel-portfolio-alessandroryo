<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View in views directory
     */
    public function index()
    {
        $blogs = Blog::all();

        return view('blog', compact('blogs'));
    }

    /**
     * Display for every blog article
     *
     * @param $image_path image path for each blog slug
     * @return Application|Factory|View in views directory
     */
    public function show($image_path)
    {
        $blogs = Blog::find($image_path);

        return view($image_path, ['blog' => $blogs]);
    }
}
