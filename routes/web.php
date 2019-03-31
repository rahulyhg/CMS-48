<?php

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
    return view('welcome');
});

Route::get('/admin', 'Auth\LoginController@showLoginForm')->name('admin');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/dashboard', function() {
    return view('dashboard');
});

//Route::get('/dashboard', function() {
//    return view('dashboard');
//})->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');

Route::resources([
    'page' => 'PageController',
    'nav' => 'NavController',
    'about' => 'AboutController',
    'navitem' => 'NavItemController'

]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

