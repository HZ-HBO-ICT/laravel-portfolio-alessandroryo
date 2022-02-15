<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FaqController;
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

Route::get('/', function () {
    return view('index', [
        'title' => 'Home',
    ]);
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/faq', [FaqController::class, 'index']);

Route::get('/blog', [BlogController::class, 'index']);

Route::get('/blog/{blog}', [BlogController::class, 'show']);

//Route::get('/ict-fow', function () {
//    return view('ict-fow');
//});
//
//Route::get('/skc-feedback', function () {
//    return view('skc-feedback');
//});
//
//Route::get('/prog-exp', function () {
//    return view('prog-exp');
//});
//
//Route::get('/swot', function () {
//    return view('swot');
//});
//
//Route::get('/study-choice', function () {
//    return view('study-choice');
//});

Route::get('/others', function () {
    return view('others');
});
