<?php

use App\Http\Controllers\BlogPostNotificationController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\FrontendController;

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

Route::get('/', [FrontendController::class, 'index']);

Route::get('/blogs', [FrontendController::class, 'blogs']);

Route::get('blog-details/{id}', [FrontendController::class, 'blog_detail']);

Route::get('/resume', function () {
    return view('resume');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('insert-contact', [ContactController::class, 'store']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/about', [FrontendController::class, 'about']);

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

Route::post('insert-comment', [CommentController::class, 'store']);

Route::post('insert-email', [BlogPostNotificationController::class, 'store']);

Route::get('deneme-email', [BlogPostNotificationController::class, 'subscribe']);