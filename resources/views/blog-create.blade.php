@extends('layouts.main')

@section('main-content')
<main>
    <section class="faq-create">
        <h1>Create Article</h1>
        <div class="faq-create-form">
            <form class="faq-form" action="/blog" method="post">
                @csrf
                <label for="title">Title:</label><br>
                <input type="text" id="question" name="title" placeholder="Question" required><br>
                @if ($errors->has('title'))
                    <p>{{ $errors->first('title') }}</p>
                @endif
                <label for="excerpt">Excerpt:</label><br>
                <textarea type="text" id="excerpt" name="excerpt" placeholder="Excerpt" required></textarea></br>
                @if ($errors->has('excerpt'))
                    <p>{{ $errors->first('excerpt') }}</p>
                @endif
                <label for="body">Body:</label><br>
                <textarea type="text" id="body" name="body" placeholder="Body" required></textarea></br>
                @if ($errors->has('body'))
                    <p>{{ $errors->first('body') }}</p>
                @endif
                <label for="image_path">Image Path:</label><br>
                <input type="text" id="image_path" name="image_path" placeholder="Image Path" required><br>
                @if ($errors->has('image_path'))
                    <p>{{ $errors->first('image_path') }}</p>
                @endif
                <label for="image_alt">Image Alt:</label><br>
                <textarea type="text" id="image_alt" name="image_alt" placeholder="Image Alt" required></textarea></br>
                @if ($errors->has('image_alt'))
                    <p>{{ $errors->first('image_alt') }}</p>
                @endif
                <input class="submit" type="submit" value="Create">
            </form>
        </div>
    </section>
</main>
@endsection
