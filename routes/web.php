<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/qui-sommes-nous', function () {
    return view('qsm');
});

Route::resource('projets', 'ProjetController');

Route::get('category/create', 'CategoryController@create')->name('category.create');
Route::post('category/store', 'CategoryController@store')->name('category.store');

Route::get('category/{slug}/projets', 'ProjetController@index')->name('projets.category');

Route::delete('projets/force/{projet}', 'ProjetController@forceDestroy')->name('projets.force.destroy');
Route::put('projets/restore/{projet}', 'ProjetController@restore')->name('projets.restore');

Route::resource('/comments','CommentsController');
Route::resource('/replies','RepliesController');
Route::post('/replies/ajaxDelete','RepliesController@ajaxDelete');

Route::get('/projet', function () {
    return view('projets.new.liste');
});

Route::get('/projet/gallery/1', function () {
    return view('projets.new.gallery');
});

Route::get('/projet/1', function () {
    return view('projets.new.projet');
});

Route::get('/partenaires', function () {
    return view('partenaire');
});

