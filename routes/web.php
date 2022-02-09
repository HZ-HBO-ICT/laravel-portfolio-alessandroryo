<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/posts/{post}', function ($post) {
//    $posts = [
//        'my-first-post' => 'Hello, this is my first blog post!',
//        'my-second-post' => 'Now I am getting the hang of this blogging thing.'
//    ];
//
//    if (!array_key_exists($post, $posts)) {
//        abort(404, 'Sorry, that post was not found.');
//    }
//
//    return view('post', [
//        'post' => $posts[$post]
//    ]);
//});

Route::get('/', function () {
    return view('index', [
        "title" => "Home"
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile"
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        "title" => "Dashboard"
    ]);
});

Route::get('/faq', function () {
    return view('faq', [
        "title" => "FAQ"
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        "title" => "Blog"
    ]);
});

Route::get('/ict-fow', function () {
    return view('ict-fow', [
        "title" => "ICT Field of Work"
    ]);
});

Route::get('/skc-feedback', function () {
    return view('skc-feedback', [
        "title" => "SKC Feedback"
    ]);
});

Route::get('/prog-exp', function () {
    return view('prog-exp', [
        "title" => "Programming Experience"
    ]);
});

Route::get('/swot', function () {
    return view('swot', [
        "title" => "SWOT"
    ]);
});

Route::get('/study-choice', function () {
    return view('study-choice', [
        "title" => "Study Choice"
    ]);
});

Route::get('/others', function () {
    return view('others', [
        "title" => "Others"
    ]);
});
