@extends('layouts.main')

@section('main-content')
<main>
    <div class="study-monitor">
        <article class="study-status">
            <h1>My Dashboard</h1>
        </article>

{{--        NBSA--}}
        <article class="study-quartile">
            <h1>&#8226; Overall &#8226;</h1>
            <section class="nbsa-study-cards">
                <div class="nbsa-study-cards-item">
                    <article class="nbsa-study-cards-info">
                        <h2>NBSA Boundary</h2>
                        <div class="nbsa-study-cards-progress"></div>
                    </article>
                    <h2 class="nbsa-study-class-percentage">0</h2>
                </div>
            </section>
        </article>

{{--        The Entire Year--}}
        <article class="study-quartile">
            <h1>&#8226; The Entire Year &#8226;</h1>
            <section class="study-cards">
                <div class="study-cards-item">
                    <article class="study-cards-info">
                        <h2>Personal Professional Development</h2>
                        <p><b>12.5</b> EC</p>
                        <p>Portofolio</p>
                        <div class="study-cards-progress"></div>
                    </article>
                    <h2 class="study-class-percentage">0</h2>
                </div>
                <div class="study-cards-item">
                    <article class="study-cards-info">
                        <h2>IT Personality</h2>
                        <p><b>2.5</b> EC</p>
                        <p>Portofolio</p>
                        <div class="study-cards-progress"></div>
                    </article>
                    <h2 class="study-class-percentage">0</h2>
                </div>
            </section>
        </article>

{{--        Whenever--}}
        <article class="study-quartile">
            <h1>&#8226; Whenever &#8226;</h1>
            <section class="study-cards">
                <div class="study-cards-item">
                    <article class="study-cards-info">
                        <h2>Personality 1</h2>
                        <p><b>1.25</b> EC</p>
                        <p>Portofolio</p>
                        <div class="study-cards-progress"></div>
                    </article>
                    <h2 class="study-class-percentage">0</h2>
                </div>
                <div class="study-cards-item">
                    <article class="study-cards-info">
                        <h2>Personality 2</h2>
                        <p><b>1.25</b> EC</p>
                        <p>Portofolio</p>
                        <div class="study-cards-progress"></div>
                    </article>
                    <h2 class="study-class-percentage">0</h2>
                </div>
            </section>
        </article>

{{--        Dynamic--}}
        @foreach($dashboard as $grade)
            <article class="study-quartile">
                <h1>&#8226; Quartile {{ $grade->quartile }} &#8226;</h1>
                <section class="study-cards">
                    <div class="study-cards-item">
                        <article class="study-cards-info">
                            <h2>{{ $grade->course_name }}</h2>
                            <p><b>{{ $grade->ec }}</b> EC</p>
                            <p>{{ $grade->test_name }}</p>
                            <div>
                                <span class="study-cards-progress"></span>
                            </div>
                        </article>
                        <h2 class="study-class-percentage">{{ $grade->best_grade }}</h2>
                    </div>
                </section>
            </article>
        @endforeach
    </div>
</main>
@endsection
