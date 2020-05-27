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
/*
Route::get('/',  function () {
    return view('home');
});
*/
Route::get('/', 'Controller@packets');
Route::get('/home', 'Controller@packets')->name('home');

Route::get('/library', function () {
    return view('lib');
});

Route::get('/experts', function () {
    return view('experts');
})->name('experts');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/comments', function () {
    return view('comments');
})->name('comments');

Route::get('/partners', function () {
    return view('partners');
})->name('partners');
/*
Route::get('/lessons', function () {
    return view('lessons');
});

Route::get('/lesson', function () {
    return view('lesson');
});
*/

Route::get('/lessons', 'LessonController@index')->name('lessons');
Route::get('/couch', 'LessonController@index')->name('couch');
Route::get('/nlp', 'LessonController@index')->name('nlp');

Route::get('/lesson/{lessonid}', 'LessonController@lessonload');

Route::get('/logout','Auth\LoginController@logout');

Route::get('/cab', function () {
    return view('cab');
});

Route::get('/exam', function () {
    return view('exam');
});

Route::get('login', function() {
    return view('auth.login');
})->name('login');

Route::post('login', 'Auth\LoginController@login')->name('login');
/*
Route::get('register/{packetid}', function() {
    return view('auth.register');
})->name('register');
*/
Route::get('/packets', 'Auth\RegisterController@packets')->name('register');


Route::get('register/{packetid}', 'Auth\RegisterController@register')->name('register');


Route::post('register', 'Auth\RegisterController@create')->name('register');

// Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/home', 'HomeController@index')->name('home');
