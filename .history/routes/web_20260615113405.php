<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*

//======================================= 1 1=================================//
//1- Les routes dans Laravel

Route::get('/', function () {
    return view('welcome');
});

// Retourner une chaine
Route::get('/hello', function() {
    return 'Hello Dawan';
});

// Retourner du json
Route::get('/data', function () {
    return [
        'name' => 'Cédric',
        'code-postal' => 56
    ];
});
*/

//======================================= 1 1=================================//
// Nommage des routes :
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Le préfixage des routes







