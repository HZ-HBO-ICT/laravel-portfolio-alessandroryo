@extends('layouts.main')
@section('bulma-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
@endsection

@section('main-content')
    <main>
        <div class="study-monitor">
            <article class="study-status">
                <h1>Grades</h1>
                <h3><a class="button is-success" href="/dashboard/create">Create a new grade</a></h3>
            </article>
            <table class="table is-fullwidth">
                <thead>
                <tr>
                    <th><abbr title="Number">No.</abbr></th>
                    <th>CU Code</th>
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
                @foreach($grades as $grade)
                    <tr>
                        <th>{{ $grade->id }}</th>
                        <td>{{ $grade->CU_code }}</td>
                        <td>{{ $grade->name }}</td>
                        <td>{{ $grade->credits }}</td>
                        <td>{{ $grade->test_name }}</td>
                        <td>{{ $grade->lowest_passing_grade }}</td>
                        <td>{{ $grade->best_grade }}</td>
                        <td>{{ $grade->passed_at }}</td>
                        <td>
                            <div class="buttons">
                                <a class="button is-info is-light" href="/dashboard/{{ $grade->id }}/edit">Edit</a>
                                <form method="POST" action="/dashboard/{{ $grade->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <input class="button is-danger is-light" type="submit" value="Delete">
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
