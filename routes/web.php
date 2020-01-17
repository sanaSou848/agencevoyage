
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

Route::get('/', 'HomeController@index');
    




Route::get('/admin', function () {
    return view('index');
});


Route::resource('categorie','CategorieController');

Route::resource('place','PlaceController');

Route::resource('local','LocalController');

Route::resource('photo','PhotoController');

Route::resource('offre','OffreController');
Route::resource('reservation','ReservationController');







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

