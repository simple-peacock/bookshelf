<?php

// RESTful route for our book resource - only using 3 routes
Route::resource('book', 'BookController',['only' => ['index', 'create', 'store']]);

// route for returning books
Route::get('book/{id}/return', 'BookController@returnBook');
