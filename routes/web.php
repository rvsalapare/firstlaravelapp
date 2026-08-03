<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
*/

Route::view('/', 'welcome', [
    'greetings' => 'Good Evening', 
    /*'person' => 'Mina'*/
    'person' => request('person', 'Mina')
    ]);
Route::view('/about', 'about');
Route::view('/contact', 'contact');