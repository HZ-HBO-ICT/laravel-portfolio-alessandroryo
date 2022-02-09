@extends('layouts.main')

@section('main-content')
<header class="profile-header">
    <figure>
        <img src="img/profile-face.png" class="profile-main-image-container" alt="Alessandro Ryo Profile Picture">
    </figure>
    <article class="profile-main-text-container">
        <h1>ALESSANDRO RYO</h1>
        <h2>&#183; A STUDENT &#183;</h2>
        <article class="profile-data">
            <h4>Date Birth:</h4>
            <p>October 19th, 2003</p>
            <h4>Country:</h4>
            <p>Indonesia</p>
            <h4>Phone:</h4>
            <p>+62 812 2005 4082</p>
            <h4>Email:</h4>
            <p>alessandroryo@gmail.com<br>anan0002@hz.nl</p>
            <h4>Address:</h4>
            <p>Dortsmansstraat 2 4381 CZ Vlissingen</p>
        </article>
    </article>
</header>
<main class="main-background">
    <section class="profile">
        <h1>Hello! I'm Ryo</h1>
        <div class="profile-text">
            <p>A student and a dreamer. Now, I study at HZ University of Applied Sciences.
                On this page, I will give you an overview of myself. I hope you can know more about who I am.</p>
        </div>
        <div class="profile-row">
            <article class="profile-col">
                <h3>Where do I came from?</h3>
                <p>I came from Indonesia.</p>
            </article>
            <article class="profile-col">
                <h3>What are my hobbies?</h3>
                <p>My hobby is actually not too much,
                    but quite fun. I really like anything about football.
                    I also enjoy playing games, especially with my friends
                    and my last hobby is sleeping.</p>
            </article>
            <article class="profile-col">
                <h3>What movie or song do I like?</h3>
                <p>My favorite films are sci-fi or action films,
                    but I am also open to watching other films.
                    I prefer pop genre songs and produce from Indonesia.</p>
            </article>
        </div>
    </section>
    <article class="edu-title">
        <h2>&#8226; Education &#8226;</h2>
    </article>
    <div class="edu-container">
        <div class="edu-timeline">
            <ul>
                <li>
                    <article class="edu-timeline-content">
                        <h2 class="edu-date">2015-2018</h2>
                        <h3>Saint Angela<br>Junior High School</h3>
                        <p>Student</p>
                    </article>
                </li>
                <li>
                    <div class="edu-timeline-content">
                        <h2 class="edu-date">2018-2021</h2>
                        <h3>Saint Angela<br>Senior High School</h3>
                        <p>Student</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <article class="org-title">
        <h2>&#8226; Organization &#8226;</h2>
    </article>
    <div class="org-container">
        <div class="org-timeline">
            <ul>
                <li>
                    <article class="org-timeline-content">
                        <h2 class="org-date">2018-2019</h2>
                        <h3>Student Council</h3>
                        <p>Member of IT Division</p>
                    </article>
                </li>
                <li>
                    <article class="org-timeline-content">
                        <h2 class="org-date">2019-2020</h2>
                        <h3>Student Council</h3>
                        <p>Head of IT Division</p>
                    </article>
                </li>
            </ul>
        </div>
    </div>
    <article class="skill-title">
        <h2>&#8226; Skill &#8226;</h2>
    </article>
    <div class="skills-container">
        <div class="skill">
            <div class="skill-name">Time Management</div>
            <div class="skill-bar"></div>
            <div class="timemanagement skill-fill">
                <span class="skill-percent">80%</span>
            </div>
        </div>
        <div class="skill">
            <div class="skill-name">Creative Thinking</div>
            <div class="skill-bar"></div>
            <div class="creativethinking skill-fill">
                <span class="skill-percent">80%</span>
            </div>
        </div>
        <div class="skill">
            <div class="skill-name">Communication</div>
            <div class="skill-bar"></div>
            <div class="communication skill-fill">
                <span class="skill-percent">70%</span>
            </div>
        </div>
        <div class="skill">
            <div class="skill-name">Teamwork</div>
            <div class="skill-bar"></div>
            <div class="teamwork skill-fill">
                <span class="skill-percent">75%</span>
            </div>
        </div>
        <div class="skill">
            <div class="skill-name">Leadership</div>
            <div class="skill-bar"></div>
            <div class="leadership skill-fill">
                <span class="skill-percent">80%</span>
            </div>
        </div>
    </div>
    <article class="collage-title">
        <h2>&#8226; Me and My Friends &#8226;</h2>
    </article>
    <figure class="collage-container">
        <img src="img/photo-collage-1.jpg" alt="photo collage 1">
        <img src="img/photo-collage-2.jpg" alt="photo collage 2">
        <img src="img/photo-collage-3.jpg" alt="photo collage 3">
        <img src="img/photo-collage-4.jpg" alt="photo collage 4">
        <img src="img/photo-collage-5.jpg" alt="photo collage 5">
        <img src="img/photo-collage-6.jpg" alt="photo collage 6">
        <img src="img/photo-collage-7.jpg" alt="photo collage 7">
        <img src="img/photo-collage-8.jpg" alt="photo collage 8">
    </figure>
</main>
@endsection
