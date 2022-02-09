@extends('layouts.main')

@section('main-content')
<header class="swot-header">
    <article class="swot-main-text-container">
        <h1>SWOT<br>Analysis</h1>
        <p>By making a SWOT-analysis, I analyze my personal strengths and weaknesses and make an inventory of the
            opportunities and threats I expect in my studies.</p>
    </article>
</header>
<main class="main-background">
    <div class="swot">
        <article class="swot-card">
            <h4>Strengths</h4>
            <ul>
                <li>Focus</li>
                <li>Perfectionist</li>
                <li>Diligent</li>
                <li>Responsible</li>
            </ul>
        </article>
        <article class="swot-card">
            <h4>Weaknesses</h4>
            <ul>
                <li>Too much thinking</li>
                <li>Too ambitious</li>
                <li>Less careful person</li>
                <li>Slow adaptation</li>
            </ul>
        </article>
        <article class="swot-card">
            <h4>Opportunities</h4>
            <ul>
                <li>Good environment</li>
                <li>Family support</li>
                <li>Friends support</li>
            </ul>
        </article>
        <article class="swot-card">
            <h4>Threats</h4>
            <ul>
                <li>Different culture</li>
                <li>Hanging out</li>
                <li>Playing too much</li>
            </ul>
        </article>
    </div>
</main>
@endsection
