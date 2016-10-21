<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
use App\pokemon;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('celebs','CelebsController');
//Route::resource('celebs.movies','MoviesController');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/edit-profile', 'EditprofileController@editprofile');
Route::post('/edit-profile', 'EditprofileController@saveeditprofile');
Route::get('/admin', 'AdminController@editpokemon');
Route::post('/admin', 'AdminController@addpokemon' );


