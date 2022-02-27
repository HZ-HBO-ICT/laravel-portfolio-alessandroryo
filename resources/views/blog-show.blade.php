@extends('layouts.main')

@section('main-content')
    <header class="prog-exp-header">
        <article class="prog-exp-main-text-container">
            <h1>{{ $article->title }}</h1>
            <p>{{ $article->excerpt }}</p>
        </article>
    </header>
    <main class="main-background">
        <article class="answer">
            <h1>{{ $article->title }}</h1>
            <p>{!! $article->body !!}</p>
        </article>
    </main>
@endsection
