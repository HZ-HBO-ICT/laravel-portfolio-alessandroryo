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
     * @return Application|Factory|View
     */
    public function edit()
    {
        $faqs = Faq::all();

        return view('faq-list', compact('faqs'));
    }

    /**
     * @return void
     */
    public function update()
    {
        //
    }

    /**
     * @return void
     */
    public function destroy()
    {
        //
    }
}
