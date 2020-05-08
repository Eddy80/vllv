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

Route::get('/',  function () {
    return view('home');
});


Route::get('/library', function () {
    return view('lib');
});

Route::get('/experts', function () {
    return view('experts');
});

Route::get('/packets', function () {
    return view('packetssection');
});

Route::get('/lessons', function () {
    return view('lessons');
});
/*
Route::get('/lesson', function () {
    return view('lesson');
});
*/
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

Route::get('register', function() {
    return view('auth.register');
})->name('register');

Route::post('register', 'Auth\RegisterController@create')->name('register');

// Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/home', 'HomeController@index')->name('home');
