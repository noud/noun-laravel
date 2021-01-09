<?php

use Illuminate\Support\Facades\Route;

Route::get('generate/doctrine/{file}', '\Inflector\API\Http\Controllers\Generator\GenerateDoctrineController@generateFile');
