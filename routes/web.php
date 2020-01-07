<?php

Route::get('/', 'MovieController@movies');
Route::get('movie/{movie}', 'MovieController@display')->name('movies.display');

Route::post('/increaseViewVideo', 'MovieController@increaseViewVideo');

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['verified', 'auth']], function() {
    // Messenger
    Route::get('/messenger', 'MessengerController@messenger')->name('messenger');
    Route::get('/following', 'MessengerController@following')->name('following');
    Route::get('/followers', 'MessengerController@followers')->name('followers');
    // Posts
    Route::post('/posts', 'PostController@index');
    Route::post('/createPost', 'PostController@create');
    //  Users
    Route::get('/users/{user}/view', 'UserController@view')->name('users.view');
    Route::get('/users/{user}/follow', 'UserController@follow')->name('users.follow');
    Route::get('/users/{user}/unfollow', 'UserController@unfollow')->name('users.unfollow');
    Route::resource('/users', 'UserController')->except(['create', 'store', 'edit']);
});

Route::group(['middleware' => ['admin']], function() {
    // Movies
    Route::resource('movies', 'MovieController')->except(['show']);
    Route::resource('movies/videos', 'VideoController')->except(['show']);
    Route::get('movies/videos/{movie}', 'VideoController@view')->name('videos.view');
    // Views
    Route::get('/movies/file/views', 'ViewController@index')->name('movies.file.views');
});
