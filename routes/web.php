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

Route::get('/main', function () {
    return 'welcome to Main page';
});

Route::get('/blog', function () {
    return 'welcome to Blog';
});

Route::get('/profile', function () {
    return 'welcome to Profile';
});

Route::get('/about', function () {
    return 'welcome to About us';
});
