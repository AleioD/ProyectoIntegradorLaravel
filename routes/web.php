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

Route::get("/register", function (){
    return view("register");
  });

Route::post("/register", function (){
  return view("registrado");
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', function () {
    return view('index');
});

Route::get('/faq',  'FaqController@directory')->name('faq');

Route::get('/ranking', function () {
    return view('ranking');
});

Route::get('/game', function () {
    return view('gameplay');
});

Route::get('/about',  'AboutController@directory')->name('about');

Route::get('/category', function () {
    return view('category');
});

Auth::routes();
