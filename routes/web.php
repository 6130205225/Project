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

Route::get('/1513', function () {
    return view('welcome');
});

Route::get('/homepage', function () {
    return view('Homepage');
});

Route::get('/login', function () {
    return view('Login');
});

Route::get('/register', function () {
    return view('Register');
});

Route::get('/templeuser', function () {
    return view('Templeuser');
});

Route::get('/activityall', function () {
    return view('Activityall');
});

Route::get('/activity', function () {
    return view('Activity');
});

Route::get('/reviewall', function () {
    return view('Reviewall');
});

Route::get('/review', function () {
    return view('Review');
});

Route::get('/admintemple', function () {
    return view('Admintemple');
});