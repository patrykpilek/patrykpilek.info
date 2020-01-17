<?php

Route::get('lang/{locale}', 'LangController@locale');
//Clear config cache:
Route::get('/config-clear', 'CacheController@configClear');
//Clear Cache facade value:
Route::get('/cache-clear', 'CacheController@cacheClear');
//Clear Route cache:
Route::get('/route-clear', 'CacheController@routeClear');
//Clear View cache:
Route::get('/view-clear', 'CacheController@viewClear');
//Reoptimized class loader:
Route::get('/optimize', 'CacheController@optimizeCache');
//Clear Config cache:
Route::get('/config-cache', 'CacheController@configCache');
//Route cache:
Route::get('/route-cache', 'CacheController@routeCache');

Route::get('/', 'MovieController@movies');
Route::get('kolumb', 'MovieController@kolumb');
Route::get('movie/{movie}', 'MovieController@display')->name('movies.display');

Route::post('/loadmore','MovieController@loadMoreData' );

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
});
