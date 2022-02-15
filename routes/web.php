<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
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

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/faq', [FaqController::class, 'index']);

Route::get('/blog', [BlogController::class, 'index']);

Route::get('/blog/{blog}', [BlogController::class, 'show']);

Route::get('/others', function () {
    return view('others');
});
