<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GradeController;
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

// Dashboard Page
Route::get('/dashboard', [GradeController::class, 'index']);
Route::post('/dashboard', [GradeController::class, 'store'])->name('grades.index');
Route::get('/dashboard/create', [GradeController::class, 'create']);
Route::get('/dashboard/{grade}', [GradeController::class, 'show']);
Route::get('/dashboard/{grade}/edit', [GradeController::class, 'edit']);
Route::put('/dashboard/{grade}', [GradeController::class, 'update']);
Route::delete('/dashboard/{grade}', [GradeController::class, 'delete']);

// FAQ Page
Route::resource('/faq', FaqController::class)->except(
    ['show', 'destroy']
);
// Exception for delete faq, because it doesn't have a single page for each faq
Route::get('/faq/{id}', [FaqController::class, 'destroy']);

// Blog Page
Route::resource('/blog', ArticleController::class)->except(
    ['destroy', 'show']
);

Route::get('/blog/{article}', [ArticleController::class, 'show'])->name('blog-show');

// Others Page

Route::get('/others', function () {
    return view('others');
});
