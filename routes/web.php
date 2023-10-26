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
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/career', function () {
    return view('career');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});
Route::get('/services', function () {
    return view('services-one');
});
Route::get('/terms-condition', function () {
    return view('terms-conditions');
});

Route::get('/web', function () {
    return view('web');
});
Route::get('/data-analysis', function () {
    return view('data-analysis');
});
Route::get('/graphic-design', function () {
    return view('graphics-design');
});
Route::get('/mobile', function () {
    return view('mobile');
});

Route::get('/seo', function () {
    return view('seo');
});
Route::get('/social-media-marketing', function () {
    return view('social-media-marketing');
});


