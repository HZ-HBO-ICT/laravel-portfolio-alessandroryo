<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        Faq::create($this->getValidateFAQ($request));

        return redirect('/faq');
    }

    /**
     * @param $id
     * @return Application|Factory|View
     */
    public function edit(Faq $faq)
    {
        return view('/faq-edit', compact('faq'));
    }

    /**
     * @param $id
     * @return Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Faq $faq, Request $request)
    {
        $faq->update($this->getValidateFAQ($request));

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

    /**
     * @return array
     */
    public function getValidateFAQ($request): array
    {
        return $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);
    }
}
