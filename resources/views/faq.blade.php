@extends('layouts.main')

@section('main-content')
<main>
    <section class="faq">
        <h1>Frequently Asked Questions</h1>
        <div class="faq-container">
            <div class="faq-accordion">
                @foreach($faqs as $faq)
                    <div class="faq-accordion-item" id="question{{ $faq->id }}">
                        <a class="faq-accordion-link" href="#question{{ $faq->id }}">
                            {{ $faq->question }}
                            <i class="icon ion-md-add"></i>
                            <i class="icon ion-md-remove"></i>
                        </a>
                        <div class="faq-answer">
                            <p>
                                {{ $faq->answer }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection
