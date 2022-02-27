@extends('layouts.main')

@section('main-content')
<header class="index-header">
    <article class="index-main-text-container">
        <h1>HBO-ICT?<br>Why?</h1>
        <p>Why did I choose the HBO-ICT? What motivates me?
            <br>Before that, you can see my profile first.</p>
        <a href="/profile" class="user-button-text">Look at my profile</a>
        <a href="/profile" class="user-icon"><i class="fa fa-user"></i> Profile</a>
    </article>
    <figure>
        <a href="https://hz.nl/en/study-programmes/it">
            <img src="img/home-image-1.png" class="index-main-image-container" alt="HBO ICT in HZ University of Applied Sciences Alessandro Ryo">
        </a>
    </figure>
</header>
<main class="main-background">
    <section class="index">
        <h1>Choosing HBO-ICT</h1>
        <article class="index-text">
            <p>I choose HBO-ICT at HZ University of Applied Science,
                because since I was a kid, I really liked computers and games.
                Then I really wanted to study in the Netherlands, far from Indonesia.
                Studying at HZ would fit my hopes and dreams very well.
                For more experience see my <a href="/blog,.">blog</a>.</p>
            <h3>My other opinions...</h3>
        </article>
        <div class="index-row">
            <article class="index-col">
                <h3>Passion</h3>
                <p>Choosing HBO-ICT is my life choice and my passion is in this major.
                    I also had the opportunity to be a head of IT division in the student council,
                    where I created a website for the student council, became a social media manager,
                    and had several other tasks related to the ICT world. And one of my life goal
                    is to make my own start-up company.</p>
                <figure class="opinion-image">
                    <img src="img/passion-image.png" alt="HBO-ICT Passion of Alessandro Ryo">
                </figure>
            </article>
            <article class="index-col">
                <h3>Successful Figure</h3>
                <p>I see many examples of successful figures because of their expertise in the ICT world.
                    For examples, Bill Gates, Steve Jobs, Mark Zuckerberg, Larry Page, and many more.
                    From there, I can learn a lot about the IT world and its struggles.</p>
                <figure class="opinion-image">
                    <img src="img/figure-image.png" alt="HBO-ICT Figure Person of Alessandro Ryo">
                </figure>
            </article>
            <article class="index-col">
                <h3>Parent Experience</h3>
                <p>My father have worked in IT for more than 20 years and I am often told about my father day-to-day experiences working in IT.
                    I learned a lot of difficulties at work as well as the joys that come with it.</p>
                <figure class="opinion-image">
                    <img src="img/parents-image.png" alt="Parents Experience of Alessandro Ryo">
                </figure>
            </article>
        </div>
    </section>
</main>
@endsection
