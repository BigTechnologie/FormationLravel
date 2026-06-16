<?php

use Illuminate\Support\Facades\Route;

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
// Npommage des routes
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/', function () {
    return view('welcome');
})->name('hello');Route::get('/', function () {
    return view('welcome');
});

Route::get('/show/{slug}-{id}', function (string $slug, int $id) {
    return [
        'slug' => $slug,
        'id' => $id
    ];
})->where(['id' => '[0-9]+', 'slug' => '[a-z0-9-]+'])->name('show');

Route::get('/data', function(Request $) )








