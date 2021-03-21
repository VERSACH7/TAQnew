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

Route::get('/', function () {
    return view('newtemplates.pages.homepage');
});

Route::get('/contactUs', function () {
    return view('newtemplates.pages.contactUs');
});

Route::get('/faq', function () {
    return view('newtemplates.pages.faq');
});

Route::get('/services', function () {
    return view('newtemplates.pages.services');
});

Route::get('/successStory', function () {
    return view('newtemplates.pages.successStory');
});

Route::get('/counter', function () {
    return view('newtemplates.pages.counter');
});

Route::get('/aboutUs', function () {
    return view('newtemplates.pages.aboutUs');
});

Route::get('/projectCategories', function () {
    return view('newtemplates.pages.projectCategories');
});

Route::get('/trending', function () {
    return view('newtemplates.pages.trending');
});

// LogInRegForgot routing 

Route::get('/loginindex', function () {
    return view('logInRegForgot.pages.loginindex');
});

Route::get('/login', function () {
    return view('logInRegForgot.pages.login');
});

Route::get('/forgot', function () {
    return view('logInRegForgot.pages.forgot');
});

Route::get('/register', function () {
    return view('logInRegForgot.pages.register');
});

// linking page to the publc controller

Route::get('/', 'App\Http\Controllers\PublicPages@homepage');

Route::get('/contactUs', 'App\Http\Controllers\PublicPages@contactUs');

Route::get('/faq', 'App\Http\Controllers\PublicPages@faq');

Route::get('/services', 'App\Http\Controllers\PublicPages@services');

Route::get('/successStory', 'App\Http\Controllers\PublicPages@successStory');

Route::get('/counter', 'App\Http\Controllers\PublicPages@counter');

Route::get('/aboutUs', 'App\Http\Controllers\PublicPages@aboutUs');

Route::get('/ProjectCategories', 'App\Http\Controllers\PublicPages@ProjectCategories');

Route::get('/trending', 'App\Http\Controllers\PublicPages@trending');

// linking loginregforget to the public controller

Route::get('/logindex', 'App\Http\Controllers\PublicPages@logindex');

Route::get('/login', 'App\Http\Controllers\PublicPages@login');

Route::get('/register', 'App\Http\Controllers\PublicPages@register');

Route::get('/forgot', 'App\Http\Controllers\PublicPages@forgot');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
