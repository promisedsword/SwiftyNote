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


Auth::routes();
Route::group(['middleware'=>'auth'],function(){
			Route::get('/', function () {
    		return view('frontpage');
			});

	// Route::get('/notebooks','NotebooksController@index')->name('notebooks.index');
	// Route::post('/notebooks','NotebooksController@store');
	// Route::get('/notebooks/create','NotebooksController@create')->name('note.index');
	// Route::get('/notebooks/{notebooks}','NotebooksController@show')->name('notebooks.show');
	// Route::get('/notebooks/{notebooks}/edit','NotebooksController@edit')->name('notebooks.edit');
	// Route::put('/notebooks/{notebooks}','NotebooksController@update');
	// Route::delete('/notebooks/{notebooks}','NotebooksController@destroy');


	Route::resource('notebooks','NotebooksController');
	Route::resource('notes','NotesController');

	Route::get('notebooks/{id}/createNote',['as'=>'createNote','uses'=>'NotesController@createNote']);
});


Route::get('/home', 'HomeController@index');
