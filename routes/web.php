<?php

use Illuminate\Support\Facades\Route;
//use Illuminate\Http\Request;
//use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;

Route::get('/', 'App\Http\Controllers\BlogController@index')->name('welcome');

Route::prefix('blog')->namespace('App\Http\Controllers')->name('blog.')->group(function() {

    Route::get('/show/{slug}-{id}', [BlogController::class, 'show'])
        ->where(['id' => '[0-9]+', 'slug' => '[a-z0-9-]+'])
        ->name('show');

    Route::get('/categories', [BlogController::class, 'categories'])->name('categories');    
    Route::get('/categories/show/{id}', [BlogController::class, 'showCategory'])->name('show.category');
});

// Les routes de secours (erreur 404)
Route::fallback(function() {
    return "Ooops Cette page n'existe pas !";
});

Route::prefix('admin')->name('admin.')->group(function(){

    //Get Posts datas
    Route::get('/posts', 'App\Http\Controllers\PostController@index')->name('post.index');

    //Show Post by Id
    Route::get('/posts/show/{id}', 'App\Http\Controllers\PostController@show')->name('post.show');

    //Get Posts by Id
    Route::get('/posts/create', 'App\Http\Controllers\PostController@create')->name('post.create');

    //Edit Post by Id
    Route::get('/posts/edit/{id}', 'App\Http\Controllers\PostController@edit')->name('post.edit');

    //Save new Post
    Route::post('/posts/store', 'App\Http\Controllers\PostController@store')->name('post.store');

    //Update One Post
    Route::put('/posts/update/{post}', 'App\Http\Controllers\PostController@update')->name('post.update');

    //Update One Post Speedly
    Route::put('/posts/speed/{post}', 'App\Http\Controllers\PostController@updateSpeed')->name('post.update.speed');

    //Delete Post
    Route::delete('/posts/delete/{post}', 'App\Http\Controllers\PostController@delete')->name('post.delete');

});