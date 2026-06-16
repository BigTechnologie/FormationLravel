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



Route::prefix('post')->name('post.')->group(function() {
    Route::get('/hello', function () {
    return 'Hello Dawan';
})->name('hello');

Route::get('/show/{slug}-{id}', function (string $slug, int $id) {
    return [
        'slug' => $slug,
        'id' => $id
    ];
})->where(['id' => '[0-9]+', 'slug' => '[a-z0-9-]+'])->name('show');

Route::get('/data', function(Request $request) {
    return [
        'name' => $request->input('names', 'Cédric'),
        'value' => $request->input('value', '22'),
        'all' => $request->all() // Permet de recuperer toutes les valeurs en faisant : http://127.0.0.1:8000/data?name=dawan&year=2026&value=new
    ];
})->name('data');

// Les rédirections
Route::get('/new', function() {
    // return [
    //     //'wWelcome' => route('welcome')
    //     'hello' => route('hello')
    // ];
    
})->name('new');
});









