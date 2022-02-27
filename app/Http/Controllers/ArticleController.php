<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

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

    /*php php-cs-fixer.phar
     * @param Article $article
     * @return \Illuminate\Contracts\View\View
     */
    public function show(Article $article)
    {
        return view('blog-show', compact('article'));
    }

    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('blog-create');
    }

    /**
     * @return \Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        Article::create($this->getValidateArticle($request));

        return redirect(route('blog'));
    }

    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(Article $article)
    {
        return view('blog-edit', compact('article'));
    }

    /**
     * @return \Illuminate\Routing\Redirector
     */
    public function update(Article $article, Request $request)
    {
        $article->update($this->getValidateArticle($request));

        return redirect($article->path());
//        return redirect('/blog', $article->id);
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $article = Faq::find($id);
        $article->delete();

        return redirect('blog');
    }

    /**
     * @param mixed $request
     */
    public function getValidateArticle($request): array
    {
        return $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'image_path' => 'required',
            'image_alt' => 'required',
        ]);
    }
}
