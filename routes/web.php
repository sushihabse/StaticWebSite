<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/About', function () {
    return view('About');
});
Route::get('/back', function () {
    return view('back');
});
Route::get('/Our', function () {
    return view('Our');
});
Route::get('/Front', function () {
    return view('Front');
});
Route::get('/Support', function () {
    return view('Support');
});
