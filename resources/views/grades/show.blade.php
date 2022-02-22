@extends('layouts.main')
@section('bulma-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
@endsection

@section('main-content')
    <main>
        <div class="study-monitor">
            <article class="study-status">
                <h1>Grade {{ $grade->id }}</h1>
                <h3><a class="button is-success" href="/dashboard/create">Create a new grade</a></h3>
            </article>
            <table class="table is-fullwidth">
                <thead>
                <tr>
                    <th><abbr title="Number">No.</abbr></th>
                    <th>Quartile</th>
                    <th>Course Name</th>
                    <th>EC</th>
                    <th>Test Name</th>
                    <th><abbr title="Lowest Passing Grade">LPG</abbr></th>
                    <th>Best Grade</th>
                    <th>Passed At</th>
                    <th><abbr title="Description">Desc</abbr></th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>{{ $grade->id }}</th>
                        <td>{{ $grade->quartile }}</td>
                        <td>{{ $grade->course_name }}</td>
                        <td>{{ $grade->ec }}</td>
                        <td>{{ $grade->test_name }}</td>
                        <td>{{ $grade->lowest_passing_grade }}</td>
                        <td>{{ $grade->best_grade }}</td>
                        <td>{{ $grade->passed_at }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
@endsection
