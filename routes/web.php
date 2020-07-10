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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::post('/summarize', 'HomeController@summarize')->name('summarize');

Route::post('/summarize_two', 'HomeController@summarize_two')->name('summarize_two');

Route::view('about', 'about')->name('about');

Route::view('feedback_contact', 'feedback_contact')->name('feedback_contact');

Route::view('about', 'about')->name('about');

Route::get('previous_proj', 'FeedbackController@previous_proj')->name('previous_proj');

Route::get('help', 'FeedbackController@help')->name('help');


Route::get('/create', 'CreateController@create')->name('create');
Route::post('/insert', 'CreateController@add');
Route::get('/update_admincrud/{id}', 'CreateController@update');
Route::post('/edit_admincrud/{id}', 'CreateController@edit');
Route::get('/read_admincrud/{id}', 'CreateController@read');
Route::get('/delete_admincrud/{id}', 'CreateController@delete');


Route::get('/admin', 'AdminController@admin')->name('admin');

Route::get('/request', 'AdminController@request')->name('request');

Route::post('/insert_help', 'FeedbackController@insert_help');

