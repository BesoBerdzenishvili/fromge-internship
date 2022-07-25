<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GetMain;
use App\Http\Controllers\GetAbout;
use App\Http\Controllers\GetBlog;
use App\Http\Controllers\GetProfile;

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

Route::get('/', [GetMain::class, 'showMain']);

Route::get('/about', [GetAbout::class, 'showAbout']);

Route::get('/blog', [GetBlog::class, 'showBlog']);

Route::get('/profile', [GetProfile::class, 'showProfile']);