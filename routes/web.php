<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
require __DIR__.'/dynamic.php';

Auth::routes();

Route::get('/', function () {
    return view('index');
});

Route::get('/resume', function () {
    return view('resume');
});

Route::get('/blog-single', function () {
    return view('blog-single');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/shortcodes', function () {
    return view('shortcodes');
});

Route::get('/typo', function () {
    return view('typo');
});

Route::get('/404', function () {
    return view('404');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
