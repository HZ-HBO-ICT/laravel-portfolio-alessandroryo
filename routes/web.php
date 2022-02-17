<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GradeController;
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

Route::get('/dashboard', [GradeController::class, 'index']);

Route::get('/faq', [FaqController::class, 'index']);

Route::post('/faq', [FaqController::class, 'store']);

Route::get('/faq/create', [FaqController::class, 'create']);

Route::get('/faq/edit', [FaqController::class, 'edit']);

Route::get('/blog', [ArticleController::class, 'index']);

Route::get('/blog/{blog}', [ArticleController::class, 'show']);

Route::get('/others', function () {
    return view('others');
});
