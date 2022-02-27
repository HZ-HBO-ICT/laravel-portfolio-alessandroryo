@extends('layouts.main')

@section('main-content')
    <main>
        <section class="faq-create">
            <h1>Update FAQ</h1>
            <div class="faq-create-form">
                <form class="faq-form" action="/faq/{{$faq->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <label for="question">Question:</label><br>
                    <input type="text" id="question" name="question" placeholder="Question" value="{{$faq->question}}"><br>
                    @if ($errors->has('question'))
                        <p>{{ $errors->first('question') }}</p>
                    @endif
                    <label for="answer">Answer:</label><br>
                    <textarea type="text" id="answer" name="answer" placeholder="Answer">{{$faq->answer}}</textarea></br>
                    @if ($errors->has('answer'))
                        <p>{{ $errors->first('answer') }}</p>
                    @endif
                    <input class="submit" type="submit" value="Update">
                </form>
            </div>
        </section>
    </main>
@endsection
