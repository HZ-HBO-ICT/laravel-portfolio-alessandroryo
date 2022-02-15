@extends('layouts.main')

@section('main-content')
<header class="ict-fow-header">
    <article class="ict-fow-main-text-container">
        <h1>ICT<br>Field of Work</h1>
        <p>How is the world of technology now? What types of jobs are there?</p>
    </article>
</header>
<main class="main-background">
    <article class="answer">
        <h1>ICT Field of Work</h1>
        <h2>Full Stack Developer</h2>
        <p>Profession that masters all fields in the development of an application.
            Understand back-end and front-end, and also need to know other knowledge such as
            server management, database, API, websocket, and UI/UX design.
            Required skills are networking, servers, database, qualitative analysis, UX design,
            security, and working with customer requirements.
            Companies that need this profession are Walmart, IBM, SAP, Paypal.</p>
        <figure>
            <img class="ict-fow-image" src="/img/full-stack-developer.png">
            <figcaption>geeksforgeeks.com</figcaption>
        </figure>
    </article>
    <article class="answer">
        <h2>Data Scientist</h2>
        <p>A profession whose job is to collect, process, and analyze data to produce useful
            information in making company decisions. The skills are needed to understand Python,
            Java, R, mathematics and statistics, communication, understanding data from a
            business perspective. Companies that need this profession are Amazon, Netflix, Google,
            Instagram, and Facebook.</p>
        <figure>
            <img class="ict-fow-image" src="/img/data-scientist.png">
            <figcaption>ictcareer.com</figcaption>
        </figure>
    </article>
    <article class="answer">
        <h2>Cyber Security Engineer</h2>
        <p>A profession whose job is to maintain and ensure that the company's data stored on the
            server remains safe or in the security of digital applications. Be the first person to be
            responsible in case of data leakage. The skills needed are network, operating system,
            monitoring tools, encryption tools, and risk management. Companies that need this profession
            are GE, Amazon, Visa, and Huawei.</p>
        <figure>
            <img class="ict-fow-image" src="/img/cyber-security.png">
            <figcaption>freepik.com</figcaption>
        </figure>
    </article>
</main>
@endsection
