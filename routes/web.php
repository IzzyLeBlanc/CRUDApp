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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//note
Route::get('/note/create/page', 'NoteController@createPage')->name('create.note.page');
Route::post('/note/create', 'NoteController@create')->name('create.note');
Route::get('/note/update/page/{id}', 'NoteController@updatePage')->name('update.note.page');
Route::post('/note/update', 'NoteController@update')->name('update.note');
Route::get('/note/delete/{id}', 'NoteController@delete')->name('delete.note');