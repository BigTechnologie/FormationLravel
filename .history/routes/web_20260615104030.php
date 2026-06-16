<?php

use Illuminate\Support\Facades\Route;



//1- Les routes 

Route::get('/', function () {
    return view('welcome');
});



