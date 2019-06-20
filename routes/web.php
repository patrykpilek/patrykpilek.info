<?php

Route::get('/', 'ComingSoonController@coming_soon')->name('coming_soon');

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::get('/wiadomosci', 'KomunikatorController@index')->name('wiadomosci');
    Route::post('/posts', 'PostController@index');
    Route::post('/createPost', 'PostController@create');

    Route::resource('/users', 'UserController')->except(['create', 'store', 'edit']);
    Route::get('/users/{user}/follow', 'UserController@follow')->name('users.follow');
    Route::get('/users/{user}/unfollow', 'UserController@unfollow')->name('users.unfollow');
});

Route::get('/filmy', 'FilmyController@index')->name('filmy');
Route::get('/filmy/koronajeden', 'FilmyController@koronajeden')->name('koronajeden');
Route::get('/filmy/koronadwa', 'FilmyController@koronadwa')->name('koronadwa');
Route::get('/filmy/chernobyl', 'FilmyController@chernobyl')->name('chernobyl');
Route::get('/filmy/kursk', 'FilmyController@kursk')->name('kursk');
Route::get('/filmy/brexit', 'FilmyController@brexit')->name('brexit');
Route::get('/filmy/agora', 'FilmyController@agora')->name('agora');
Route::get('/filmy/picasso', 'FilmyController@picasso')->name('picasso');
Route::get('/filmy/albert_einstein', 'FilmyController@albert_einstein')->name('albert_einstein');

