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

Route::get('/', 'siteController@index');
Route::get('/index/all', 'siteController@index2');
Route::get('/detail-blog/{category}/{slug}','siteController@detail');
Route::get('/all-books', 'siteController@books');
Route::get('/searching', 'siteController@search');
Route::get('/index', 'siteController@index3');
Route::post('/mails', 'siteController@send');
Route::get('/pageContact', 'siteController@pageContact');
Route::post('/contact', 'siteController@contact');







Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
