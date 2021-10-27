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

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/contacts', function () {
    $array_comics = config('comics');
    $data = [
      'comics'  => $array_comics
    ];
    return view('contacts', $data);
})->name('contacts');

Route::get('/about', function () {
    $array_comics = config('comics');
    $data = [
      'comics'  => $array_comics
    ];
    return view('about' ,$data);
})->name('about');