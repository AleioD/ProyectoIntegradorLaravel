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
    return view('index');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', function () {
    return view('index');
});

Route::get('/faq',  'FaqController@directory')->name('faq');

Route::get('/ranking', 'ProfileController@showRanking');

Route::get('/game', 'GameController@startGame');

Route::post('/game', 'GameController@select');

Route::get('/saveGame', 'GameController@saveGame');

// Route::get('/questionAdminForm', function () {
//     return view('questionAdminForm');
// });

Route::get('/questionAdminForm', 'QuestionsController@add');

Route::post('/questionAdminForm', 'QuestionsController@store');

Route::get('/about',  'AboutController@directory')->name('about');

Route::get('/category', 'GameController@showCategory');

//Route::get('/profile/{id}', 'ProfileController@show')->name('show');


Auth::routes();
