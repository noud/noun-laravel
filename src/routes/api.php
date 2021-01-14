<?php

use Illuminate\Support\Facades\Route;

Route::get('api/plural/{singular}', '\Nouns\API\Http\Controllers\API\InflectorAPIController@plural');
Route::get('api/singular/{plural}', '\Nouns\API\Http\Controllers\API\InflectorAPIController@singular');
