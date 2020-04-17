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

Route::get('/login', function () {
    return view('login');
});

Route::get('/reg', function () {
    return view('reg');
});
/*
Route::get('login', function() {
    return view('login');
})->name('login');

Route::get('register', function() {
    return view('welcome');
})->name('register');
*/

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');
