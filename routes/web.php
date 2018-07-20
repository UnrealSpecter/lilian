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
    return view('partials.home');
});

Route::get('/textual', function () {
    return view('partials.textual');
});

Route::get('/textual/writing', 'WritingController@index');
Route::get('/textual/notebook', 'NotebookController@index');
Route::get('/about', 'AboutController@index');
Route::get('/about/cv', 'CVController@index');
Route::get('/about/news', 'NewsController@index');
Route::get('/about/news/{id}', 'NewsController@show');
Route::get('/visual', 'VisualController@index');

Route::get('/contact', function () {
    return view('partials.contact');
});

Route::post('/contact', 'ContactController@index');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// 2017 routes
Route::get('/visual/2018/the-woman-as-a-kitchentable', function(){
    return view('visuals.the-woman-as-a-kitchentable');
});

// 2017 routes
Route::get('/visual/2017/break-the-internet', function(){
    return view('visuals.break-the-internet');
});

Route::get('/visual/2017/girls-girls-girls', function(){
    return view('visuals.girls-girls-girls');
});

Route::get('/visual/2017/onkruid', function(){
    return view('visuals.onkruid');
});

Route::get('/visual/2017/ranja', function(){
    return view('visuals.ranja');
});

// 2016 routes
Route::get('/visual/2016/the-guns-of-youth-pt1', function(){
    return view('visuals.the-guns-of-youth-pt1');
});

Route::get('/visual/2016/xxxy', function(){
    return view('visuals.xxxy');
});
