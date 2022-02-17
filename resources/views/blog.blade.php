@extends('layouts.main')

@section('main-content')
<main class="post-container">
    <article class="post-title">
        <h1>My Blog</h1>
    </article>
    <div class="post-column-card">
        @foreach($articles as $article)
            <div class="post-card">
                <figure>
                    <img src="{{ $article->image_path }}" alt="{{ $article->image_alt }}">
                </figure>
                <article class="post-panel">
                    <span class="post-date">{{ $article->created_at }}</span>
                    <h3>{{ $article->title }}</h3>
                    <p>{{ $article->excerpt }}</p>
                    <span class="post-breaker"></span><br>
                    <a href="/blog/{{ $article->slug }}">Read More &#8594;</a>
                </article>
            </div>
        @endforeach
    </div>
</main>

@endsection
