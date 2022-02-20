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
                    <label for="answer">Answer:</label><br>
                    <textarea type="text" id="answer" name="answer" placeholder="Answer">{{$faq->answer}}</textarea></br>
                    <input class="submit" type="submit" value="Update">
                </form>
            </div>
        </section>
    </main>
@endsection
