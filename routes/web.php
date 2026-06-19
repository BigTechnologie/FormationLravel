<?php

use Illuminate\Support\Facades\App;
//use Illuminate\Http\Request;
//use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\MailController;

// Mail
Route::get('/send-mail', [MailController::class, 'showForm'])->name('send.mail.form');
Route::post('/send-mail', [MailController::class, 'sendMail'])->name('send.mail');

// L'nternatinalisation
Route::get('/greeting/{locale}', function(string $locale) {
    if(! in_array($locale, ['en', 'es', 'fr'])) {
        abort(400);
    }

    App::setLocale($locale);

    return Lang::get('messages.welcome');

});

Route::get('/', 'App\Http\Controllers\BlogController@index')->name('welcome');

Route::middleware('guest')->group(function() {
    Route::get('/register', 'App\Http\Controllers\BlogController@register')->name('register');
    Route::post('/register/save', 'App\Http\Controllers\BlogController@registerSave')->name('register.save'); // Pour la soumission des données du formulaire
    Route::get('/login', 'App\Http\Controllers\BlogController@login')->name('login');
    Route::post('/login/authenticate', 'App\Http\Controllers\BlogController@authenticate')->name('login.authenticate');
});

Route::delete('/logout', 'App\Http\Controllers\BlogController@logout')
    ->name('logout')
    ->middleware(Authenticate::class);


Route::prefix('blog')->namespace('App\Http\Controllers')->name('blog.')->group(function() {

    Route::get('/show/{slug}-{id}', [BlogController::class, 'show'])
        ->where(['id' => '[0-9]+', 'slug' => '[a-z0-9-]+'])
        ->name('show');

    Route::get('/categories', [BlogController::class, 'categories'])->name('categories');    
    Route::get('/categories/show/{id}', [BlogController::class, 'showCategory'])->name('show.category');
});


Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function(){

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

    // ADMINISTRATION DES CATEGORIES
    //Get Categories datas
    Route::get('/categories', 'App\Http\Controllers\CategoryController@index')->name('category.index');

    //Show Category by Id
    Route::get('/categories/show/{id}', 'App\Http\Controllers\CategoryController@show')->name('category.show');

    //Get Categories by Id
    Route::get('/categories/create', 'App\Http\Controllers\CategoryController@create')->name('category.create');

    //Edit Category by Id
    Route::get('/categories/edit/{id}', 'App\Http\Controllers\CategoryController@edit')->name('category.edit');

    //Save new Category
    Route::post('/categories/store', 'App\Http\Controllers\CategoryController@store')->name('category.store');

    //Update One Category
    Route::put('/categories/update/{category}', 'App\Http\Controllers\CategoryController@update')->name('category.update');

    //Update One Category Speedly
    Route::put('/categories/speed/{category}', 'App\Http\Controllers\CategoryController@updateSpeed')->name('category.update.speed');

    //Delete Category
    Route::delete('/categories/delete/{category}', 'App\Http\Controllers\CategoryController@delete')->name('category.delete');

    // ADMINISTRATION DES UTILISATEURS
    //Get Users datas
    Route::get('/users', 'App\Http\Controllers\UserController@index')->name('user.index');

    //Show User by Id
    Route::get('/users/show/{id}', 'App\Http\Controllers\UserController@show')->name('user.show');

    //Get Users by Id
    Route::get('/users/create', 'App\Http\Controllers\UserController@create')->name('user.create');

    //Edit User by Id
    Route::get('/users/edit/{id}', 'App\Http\Controllers\UserController@edit')->name('user.edit');

    //Save new User
    Route::post('/users/store', 'App\Http\Controllers\UserController@store')->name('user.store');

    //Update One User
    Route::put('/users/update/{user}', 'App\Http\Controllers\UserController@update')->name('user.update');

    //Update One User Speedly
    Route::put('/users/speed/{user}', 'App\Http\Controllers\UserController@updateSpeed')->name('user.update.speed');

    //Delete User
    Route::delete('/users/delete/{user}', 'App\Http\Controllers\UserController@delete')->name('user.delete');



});


// Les routes de secours (erreur 404)
Route::fallback(function() {
    return "Ooops Cette page n'existe pas !";
});
