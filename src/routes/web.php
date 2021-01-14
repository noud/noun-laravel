<?php

use Illuminate\Support\Facades\Route;

Route::get('generate/doctrine/{file}', '\Nouns\Http\Controllers\Generator\GenerateDoctrineController@generateFile');
