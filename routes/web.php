<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login','AuthController@login');
