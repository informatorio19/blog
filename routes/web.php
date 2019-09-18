<?php




Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::resource('categorias', 'CategoriasController');


Route::resource('blogs', 'BlogController');

// Route::get('blog','BlogController@index')->name('blog.index');


Route::get('post','BlogController@show')->name('blog.post');

Route::get('lista/{post}','BlogController@listar')->name('lista');
  Route::resource('posts', 'PostsController');
Route::group(['middleware' => ['role:superadmin|admin']], function () {

Route::resource('permisos', 'PermisosController');
Route::resource('roles', 'RolesController');
Route::resource('admin', 'AdminController');

});




