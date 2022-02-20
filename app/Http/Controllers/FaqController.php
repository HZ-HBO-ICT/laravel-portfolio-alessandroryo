<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View in views directory
     */
    public function index()
    {
        $faqs = Faq::all();

        return view('faq', compact('faqs'));
    }

    /**
     * @return void
     */
    public function show()
    {
        //
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('faq-create');
    }

    /**
     * @return Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store()
    {
        $faqs = new Faq();
        $faqs->question = request('question');
        $faqs->answer = request('answer');
        $faqs->save();

        return redirect('/faq');
    }

    /**
     * @param $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $faq = Faq::find($id);

        return view('/faq-edit', compact('faq'));
    }

    /**
     * @param $id
     * @return Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id)
    {
        $faq = Faq::find($id);
        $faq->question = request('question');
        $faq->answer = request('answer');
        $faq->save();

        return redirect('/faq');
    }

    /**
     * @return void
     */
    public function destroy($id)
    {
        $faq = Faq::find($id);
        $faq->delete();

        return redirect('/faq');
    }
}
