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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//Client Routes

Route::get('/client', 'ClientController@index')->name('client.index');
Route::get('/client-add', 'ClientController@create')->name('client.create');
Route::post('/client-store', 'ClientController@store')->name('client.store');
Route::get('/client/contact/{id}', 'ClientController@show')->name('client.contact');

Route::get('/delete-client/{id}', function($id) {
    //
    App\Client::find($id)->delete();
    
    return redirect()->back()->withInput();
    
});

Route::post('/add-note', 'NoteController@store')->name('note.add');
Route::post('/add-service', 'ClientController@addService');

