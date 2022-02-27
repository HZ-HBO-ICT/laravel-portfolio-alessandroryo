@extends('layouts.main')

@section('main-content')
<main>
    <section class="faq">
        <h1>Frequently Asked Questions</h1>
        <h3><a href="/faq/create">Create FAQ</a></h3>
        <div class="faq-container">
            <div class="faq-accordion">
                @foreach($faqs as $faq)
                    <div class="faq-accordion-item" id="question{{ $faq->id }}">
                        <a class="faq-accordion-link" href="/faq#question{{ $faq->id }}">
                            {{ $faq->question }}
                        </a>
                        <div class="faq-answer">
                            <p>
                                {{ $faq->answer }}
                            </p>
                        </div>
                        <div class="faq-action">
                            <a href="/faq/{{ $faq->id }}/edit">Edit</a>
                            <a href="/faq/{{$faq->id}}">Delete</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection
