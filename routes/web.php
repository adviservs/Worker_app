<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/workers', function() {
//    return 'This is worker from works';
//});

Route::get('/workers', function() {
    echo 'bla bla bla';
    dd('1234asdf'); // die dump
    echo 'This is worker from works';
});
