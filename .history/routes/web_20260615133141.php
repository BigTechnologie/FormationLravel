<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;

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
/*
// Préfixage des routes
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
    //return to_route('post.show', ['id' => 96, 'slug' => 'new-article-laravel']);
    //return redirect()->route('welcome');
    return redirect()->route('post.data');
    
})->name('new');

});

*/

Route::get('/', function() {
    return view('welcome');
})->name('welcome');

Route::prefix('post')->namespace('App\Http\Controllers')->name('post.')->group(function() {
    Route::get('/hello', [PostController::class, 'hello'])->name('hello'); // Route::get('/hello', 'PostController@hello')->name('hello');

    Route::get('/show/{slug}-{id}', [PostController::class, 'show'])->name('hello')
        ->where(['id' => '[0-9]+', 'slug' => '[a-z0-9-]+'])
        ->name('show');

    Route::get('/data', [PostController::class, 'data'])->name('data');    

        Route::get('/new', [PostController::class, 'new'])->name('new');
});

// Les routes de secours (erreur 404)
Route::fallback(function() {
    return "Ooops Cette page n'existe pas !";
});









