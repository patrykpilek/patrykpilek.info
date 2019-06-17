<?php

Route::get('/', function () {
    return view('coming_soon');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::get('/wiadomosci', 'KomunikatorController@index')->name('wiadomosci');
    Route::get('/posts', 'PostController@index');
    Route::post('/posts', 'PostController@create');

    Route::get('/users/{user}', 'UserController@view')->name('users.view');
    Route::get('/users/{user}/follow', 'UserController@follow')->name('users.follow');
    Route::get('/users/{user}/unfollow', 'UserController@unfollow')->name('users.unfollow');

    Route::get('profile', 'UserController@profile')->name('profile');
    Route::post('profile', 'UserController@update_avatar')->name('update.avatar');
});

Route::get('/filmy', 'FilmyController@index')->name('filmy');

Route::get('/filmy/koronajeden', function() {
    return view('filmy/koronajeden');
})->name('koronajeden');

Route::get('/filmy/koronadwa', function() {
    return view('filmy/koronadwa');
})->name('koronadwa');

Route::get('/filmy/opeople_vs_oj_simpson', function() {
    return view('filmy/people_vs_oj_simpson');
})->name('people_vs_oj_simpson');

Route::get('/filmy/chernobyl', function() {
    return view('filmy/chernobyl');
})->name('chernobyl');

Route::get('/filmy/mary_queen_of_scots', function() {
    return view('filmy/mary_queen_of_scots');
})->name('mary_queen_of_scots');

Route::get('/filmy/kursk', function() {
    return view('filmy/kursk');
})->name('kursk');

Route::get('/filmy/brexit', function() {
    return view('filmy/brexit');
})->name('brexit');

Route::get('/filmy/agora', function() {
    return view('filmy/agora');
})->name('agora');
