<?php


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('categorias','CategoriasController@index')->name('categorias.index');
Route::post('categorias','CategoriasController@store')->name('categorias.store');




Route::group(['middleware' => ['role:super-admin']], function () {
    Route::resource('posts', 'PostsController');
});

Route::group(['middleware' => ['role:user']], function () {
    Route::get('posts','PostsController@index')->name('posts.index');
});
