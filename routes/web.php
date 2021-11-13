<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/logout', 'UserController@logout')->name('logout');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/nos-services/permis-de-construire', 'HomeController@permisConstruire')->name('permis-de-construire');
Route::get('/form', 'HomeController@form')->name('form');
