<?php


Route::name('home')->get('/','EventController@index');

Route::resource('events', 'EventController');
