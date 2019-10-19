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

Route::get('category/{slug}/projets', 'ProjetController@index')->name('projets.category');

Route::delete('projets/force/{projet}', 'ProjetController@forceDestroy')->name('projets.force.destroy');
Route::put('projets/restore/{projet}', 'ProjetController@restore')->name('projets.restore');

/* Route::get('/projets', function () {
    return view('projets.liste');
});

Route::get('/projets/gallery/1', function () {
    return view('projets.gallery');
});

Route::get('/projets/1', function () {
    return view('projets.projet');
}); */

Route::get('/partenaires', function () {
    return view('partenaire');
});

