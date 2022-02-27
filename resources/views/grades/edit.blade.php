@extends('layouts.main')
@section('bulma-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
@endsection

@section('main-content')
    <main>
        <div class="study-monitor">
            <article class="study-status">
                <h1>Edit Grade</h1>
            </article>
        </div>
        <form class="box" action="/dashboard/{{ $grade->id }}" method="POST">
            @csrf
            @method('PUT')

            <div class="field">
                <label class="label" for="quartile">Quartile</label>
                <div class="control">
                    <input class="input" name="quartile" type="number" placeholder="Quartile" required value="{{ $grade->quartile }}">
                </div>
            </div>
            @if ($errors->has('quartile'))
                <p>{{ $errors->first('quartile') }}</p>
            @endif

            <div class="field">
                <label class="label" for="course_name">Course Name</label>
                <div class="control">
                    <input class="input" name="course_name" type="text" placeholder="Course Name" required value="{{ $grade->course_name }}">
                </div>
            </div>
            @if ($errors->has('course_name'))
                <p>{{ $errors->first('course_name') }}</p>
            @endif

            <div class="field">
                <label class="label" for="ec">EC</label>
                <div class="control">
                    <input class="input" name="ec" type="number" placeholder="EC" required value="{{ $grade->ec }}">
                </div>
            </div>
            @if ($errors->has('ec'))
                <p>{{ $errors->first('ec') }}</p>
            @endif

            <div class="field">
                <label class="label" for="test_name">Test Name</label>
                <div class="control">
                    <input class="input" name="test_name" type="text" placeholder="Test Name" required value="{{ $grade->test_name }}">
                </div>
            </div>
            @if ($errors->has('test_name'))
                <p>{{ $errors->first('test_name') }}</p>
            @endif

            <div class="field">
                <label class="label" for="lowest_passing_grade">Lowest Passing Grade</label>
                <div class="control">
                    <input class="input" name="lowest_passing_grade" type="number" placeholder="Lowest Passing Grade" min="0" max="10" required value="{{ $grade->lowest_passing_grade }}">
                </div>
            </div>
            @if ($errors->has('lowest_passing_grade'))
                <p>{{ $errors->first('lowest_passing_grade') }}</p>
            @endif

            <div class="field">
                <label class="label" for="best_grade">Best Grade</label>
                <div class="control">
                    <input class="input" name="best_grade" type="number" placeholder="Best Grade" min="0" max="10" value="{{ $grade->best_grade }}">
                </div>
            </div>
            @if ($errors->has('best_grade'))
                <p>{{ $errors->first('best_grade') }}</p>
            @endif

            <input class="button is-success" type="submit" value="Update">
        </form>
    </main>
@endsection
