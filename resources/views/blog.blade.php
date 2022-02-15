@extends('layouts.main')

@section('main-content')
<main class="post-container">
    <article class="post-title">
        <h1>My Blog</h1>
    </article>
    <div class="post-column-card">
        @foreach($blogs as $blog)
            <div class="post-card">
                <figure>
                    <img src="img/{{ $blog->image_path }}.png" alt="{{ $blog->image_alt }}">
                </figure>
                <article class="post-panel">
                    <span class="post-date">{{ $blog->created_at }}</span>
                    <h3>{{ $blog->title }}</h3>
                    <p>{{ $blog->excerpt }}</p>
                    <span class="post-breaker"></span><br>
                    <a href="/blog/{{ $blog->image_path }}">Read More &#8594;</a>
                </article>
            </div>
        @endforeach
    </div>
</main>

@endsection
