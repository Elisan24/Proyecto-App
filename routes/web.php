<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;


Route::get('Property', 'App\Http\Controllers\PropertyController@index');


Route::get('/', function () { return view('welcome');});
