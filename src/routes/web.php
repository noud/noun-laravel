<?php

use Illuminate\Support\Facades\Route;

Route::get('generate/doctrine/{file}', '\Nouns\API\Http\Controllers\Generator\GenerateDoctrineController@generateFile');
