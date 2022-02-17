@extends('layouts.main')

@section('main-content')
    <main>
        <section class="faq-edit">
            <h1>Edit FAQ</h1>
            <h3><a href="/faq/create">Create FAQ</a></h3>
            <table class="faq-table">
                <tr>
                    <th>No.</th>
                    <th>Question</th>
                    <th>Answer</th>
                    <th>Description</th>
                </tr>
                @foreach($faqs as $faq)
                    <tr>
                        <td>{{ $faq->id }}</td>
                        <td>{{ $faq->question }}</td>
                        <td>{{ $faq->answer }}</td>
                        <td class="faq-td-desc">
                            <a href="">Edit</a>
                            <a href="">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </section>
    </main>
@endsection
