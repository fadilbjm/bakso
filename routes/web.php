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

// Landing Page
Route::get('/', 'Clanding@index');
Route::get('home', 'Clanding@index');
Route::get('promo', 'Clanding@promo');
Route::get('tentang', 'Clanding@tentang');
Route::get('menu', 'Clanding@menu');
Route::post('subscribe', 'Clanding@subs');
Route::get('subscribeDone', 'Clanding@subsdone');

// Blog