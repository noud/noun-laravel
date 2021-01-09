<?php

use Illuminate\Support\Facades\Route;

Route::get('api/plural/{singular}', '\Inflector\API\Http\Controllers\API\InflectorAPIController@plural');
Route::get('api/singular/{plural}', '\Inflector\API\Http\Controllers\API\InflectorAPIController@singular');
