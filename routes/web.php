<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\RestrictionController;
use App\Http\Controllers\ServiceController;

Route::get('/', function () { return view('welcome');});


Route::get('/property', [PropertyController::class, 'index'])->name('home');
Route::get('Property', 'App\Http\Controllers\CommentController@index');
Route::get('Property', 'App\Http\Controllers\GuestController@index');
Route::get('Property', 'App\Http\Controllers\OwnerController@index');
Route::get('Property', 'App\Http\Controllers\RestrictionController@index');
Route::get('Property', 'App\Http\Controllers\ServiceController@index');



