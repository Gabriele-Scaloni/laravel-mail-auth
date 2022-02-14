<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.home');
});

//Auth::routes();
Route::post('/register', 'Auth\RegisterController@register')->name('register');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');



Route::get('/home', 'GuestController@home') ->name('home');
Route::get('api/videogames/list', 'ApiController@getVideogames') ->name('api.videogames.list');
