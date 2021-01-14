<?php

use Illuminate\Support\Facades\Route;

Route::get('api/plural/{singular}', '\Nouns\Http\Controllers\API\InflectorAPIController@plural');
Route::get('api/singular/{plural}', '\Nouns\Http\Controllers\API\InflectorAPIController@singular');
