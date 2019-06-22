<?php

Route::get('/', 'ComingSoonController@coming_soon')->name('coming_soon');

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    // Messenger
    Route::get('/messenger', 'MessengerController@messenger')->name('messenger');
    Route::get('/following', 'MessengerController@following')->name('following');
    Route::get('/followers', 'MessengerController@followers')->name('followers');
    // Posts
    Route::post('/posts', 'PostController@index');
    Route::post('/createPost', 'PostController@create');
    //  Users
    Route::resource('/users', 'UserController')->except(['create', 'store', 'edit']);
    Route::get('/users/{user}/view', 'UserController@view')->name('users.view');
    Route::get('/users/{user}/follow', 'UserController@follow')->name('users.follow');
    Route::get('/users/{user}/unfollow', 'UserController@unfollow')->name('users.unfollow');
});

Route::get('/movies', 'MovieController@index')->name('movies');
Route::get('/movies/koronajeden', 'MovieController@koronajeden')->name('koronajeden');
Route::get('/movies/koronadwa', 'MovieController@koronadwa')->name('koronadwa');
Route::get('/movies/chernobyl', 'MovieController@chernobyl')->name('chernobyl');
Route::get('/movies/kursk', 'MovieController@kursk')->name('kursk');
Route::get('/movies/brexit', 'MovieController@brexit')->name('brexit');
Route::get('/movies/agora', 'MovieController@agora')->name('agora');
Route::get('/movies/picasso', 'MovieController@picasso')->name('picasso');
Route::get('/movies/albert_einstein', 'MovieController@albert_einstein')->name('albert_einstein');

