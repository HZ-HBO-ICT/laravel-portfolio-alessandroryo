@extends('layouts.main')

@section('main-content')
<main class="post-container">
    <article class="post-title">
        <h1>My Blog</h1>
    </article>
    <div class="post-column-card">
        <div class="post-card">
            <figure>
                <img src="img/ict-fow.png" alt="ICT Field of Work Alessandro Ryo">
            </figure>
            <article class="post-panel">
                <span class="post-date">September 3th, 2021</span>
                <h3>ICT Field of Work</h3>
                <p>How is the world of technology now? What types of jobs are there?</p>
                <span class="post-breaker"></span><br>
                <a href="/ict-fow">Read More &#8594;</a>
            </article>
        </div>
        <div class="post-card">
            <figure>
                <img src="img/skc-feedback.png" alt="SKC First Feedback Alessandro Ryo">
            </figure>
            <article class="post-panel">
                <span class="post-date">September 3th, 2021</span>
                <h3>SKC First Feedback</h3>
                <p>My first SKC feedback.</p>
                <span class="post-breaker"></span><br>
                <a href="/skc-feedback">Read More &#8594;</a>
            </article>
        </div>
        <div class="post-card">
            <figure>
                <img src="img/programming-experience.png" alt="Programming Experience Alessandro Ryo">
            </figure>
            <article class="post-panel">
                <span class="post-date">September 3th, 2021</span>
                <h3>Programming Experience</h3>
                <p>Do I have programming experience? How's the story? Check it out!!!</p>
                <span class="post-breaker"></span><br>
                <a href="/prog-exp">Read More &#8594;</a>
            </article>
        </div>
        <div class="post-card">
            <figure>
                <img src="img/swot-analysis.png" alt="SWOT Analysis Alessandro Ryo">
            </figure>
            <article class="post-panel">
                <span class="post-date">September 3th, 2021</span>
                <h3>Personal SWOT Analysis</h3>
                <p>By making a SWOT-analysis, I analyze my personal strengths and weaknesses and make an inventory of the
                    opportunities and threats I expect in my studies.</p>
                <span class="post-breaker"></span><br>
                <a href="/swot">Read More &#8594;</a>
            </article>
        </div>
        <div class="post-card">
            <figure>
                <img src="img/study-choice.png" alt="Study Choice Alessandro Ryo">
            </figure>
            <article class="post-panel">
                <span class="post-date">September 3th, 2021</span>
                <h3>Study Choice</h3>
                <p>A combination of the sections study choice activities,
                    motivate your study choice and after completing the study from my SKC document</p>
                <span class="post-breaker"></span><br>
                <a href="/study-choice">Read More &#8594;</a>
            </article>
        </div>
    </div>
</main>

@endsection
