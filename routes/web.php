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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/feature', function () {
    return view('feature');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/testimonial', function () {
    return view('testimonial');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/quote', function () {
    return view('quote');
});

Route::get('/footer', function () {
    return view('footer');
});


Route::get('layanan-design', function () {
    return view('layanan/layanan-design');
});

Route::get('mobile-app', function () {
    return view('layanan/mobile-app');
});

Route::get('web-aplikasi', function () {
    return view('layanan/web-aplikasi');
});

Route::get('web-profile', function () {
    return view('layanan/web-profile');
});
Route::get('/faq', function () {
    return view('faq');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', function () {
    return view('auth.logout-test');
})->name('test.logout');
