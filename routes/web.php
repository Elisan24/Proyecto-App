<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\RestrictionController;
use App\Http\Controllers\ServiceController;

Route::get('/', function () { return view('welcome');});



Route::get('comment', 'App\Http\Controllers\CommentController@index');
Route::get('property', 'App\Http\Controllers\PropertyController@index');
Route::get('owner', 'App\Http\Controllers\OwnerController@index');
Route::get('guest', 'App\Http\Controllers\GuestController@index');
Route::get('restriction', 'App\Http\Controllers\RestrictionController@index');
Route::get('service', 'App\Http\Controllers\ServiceController@index');



