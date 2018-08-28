<?php
// Route::get('events', 'EventController@index');

// Route::get('events/create', 'EventController@create');

// Route::get('events/{id}', 'EventController@show');

// Route::post('events','EventController@store');

// Route::delete('events/{id}', 'EventController@destroy');

// Route::get('events/{id}/edit', 'EventController@edit');

// Route::put('events/{id}', 'EventController@update');
Route::resource('events-ajax','EventAjaxController');