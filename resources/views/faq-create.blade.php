@extends('layouts.main')

@section('main-content')
    <main>
        <section class="faq-create">
            <h1>Create FAQ</h1>
            <div class="faq-create-form">
                <form class="faq-form" action="/faq" method="post">
                    @csrf
                    <label for="question">Question:</label><br>
                    <input type="text" id="question" name="question" placeholder="Question" required><br>
                    @if ($errors->has('question'))
                        <p>{{ $errors->first('question') }}</p>
                    @endif
                    <label for="answer">Answer:</label><br>
                    <textarea type="text" id="answer" name="answer" placeholder="Answer" required></textarea></br>
                    @if ($errors->has('answer'))
                        <p>{{ $errors->first('answer') }}</p>
                    @endif
                    <input class="submit" type="submit" value="Create">
                </form>
            </div>
        </section>
    </main>
@endsection
