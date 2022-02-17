<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\String_;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View in views directory
     */
    public function index()
    {
        $articles = Article::all();

        return view('blog', compact('articles'));
    }

    /**
     * Display for every article
     *
     * @param $article_slug = uri slug for each article
     * @return Resources|Views in views directory
     */
    public function show($article_slug)
    {
        $articles = Article::find($article_slug);

        return view($article_slug, ['articles' => $articles]);
    }
}
