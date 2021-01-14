<?php

use Illuminate\Support\Facades\Route;

Route::get('api/v1/plural/{singular}', '\Nouns\Http\Controllers\API\InflectorAPIController@plural');
Route::get('api/v1/singular/{plural}', '\Nouns\Http\Controllers\API\InflectorAPIController@singular');
