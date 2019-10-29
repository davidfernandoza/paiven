<?php

use Illuminate\Http\Request;
Route::get('/countries/trm',	'Trm\IndexController@index');
Route::get('/users/visible',	'Users\IndexController@visible');
