<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universidad;
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

    $univer = new Universidad();

    return view('blog.index',['uni' => $univer]);

})->name('inicio');

Route::get('/generic', function () {

    return view('blog.generic');

})->name('generic');

Route::get('/elements', function () {

    return view('blog.elements');

})->name('elements');

Route::get('/prueba', function () {

    return view('blog.prueba');

})->name('prueba');
