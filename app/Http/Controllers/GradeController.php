<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGradeRequest;
use App\Http\Requests\UpdateGradeRequest;
use App\Models\Grade;
use Illuminate\Support\Facades\DB;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grades = DB::table('grades')
            ->join('courses', 'grades.course_id', '=', 'courses.id')
            ->get([
                'courses.id',
                'courses.CU_code',
                'courses.name',
                'courses.credits',
                'grades.test_name',
                'grades.lowest_passing_grade',
                'grades.best_grade',
                'courses.passed_at']);
        return view('grades.index', compact('grades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGradeRequest $request)
    {
        Grade::create($this->getValidateGrade($request));

        return redirect(route('grades.index'));
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Grade $grade)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Grade $grade)
    {
        return view('grades.edit', compact('grade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGradeRequest $request, Grade $grade)
    {
        $grade->update($this->getValidateGrade($request));

        return redirect(route('grades.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete(Grade $grade)
    {
        $grade->delete();

        return redirect(route('grades.index'));
    }

    /**
     * Method for validate user input.
     *
     * @param $request
     *
     * @return mixed
     */
    public function getValidateGrade($request)
    {
        return $request->validate([
            'quartile' => 'required',
            'course_name' => 'required',
            'ec' => 'required',
            'test_name' => 'required',
            'lowest_passing_grade' => 'required',
        ]);
    }
}
