<?php

namespace App\Http\Controllers;

use App\Models\Grade;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $grades = Grade::all();

        return view('dashboard', compact('grades'));
    }
}
