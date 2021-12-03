<?php

use Illuminate\Support\Facades\Auth;
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

//Questionnaire
Route::post('/questionnaire-create', 'QuestionnaireController@create')->name('questionnaire-create');
Route::get('/questionnaire-step1', 'QuestionnaireController@step1')->name('questionnaireStep1');
Route::get('/questionnaire-step2', 'QuestionnaireController@step2')->name('questionnaireStep2');
Route::post('/questionnaire-submit', 'QuestionnaireController@submit')->name('questionnaire-submit');

//Dashboard
Route::get('/dashboard', 'DashboardController@view')->name('dashboard');

//Projet
Route::post('/rename-project', 'ProjectController@renameProject')->name('rename-project');
Route::post('/change-adresse-project', 'ProjectController@changeAdresseProject')->name('change-adresse-project');

//Document
Route::post('/document-upload', 'DocumentController@uploadDocument')->name('document-upload');
Route::get('/document/delete/{id}', 'DocumentController@deleteDocument')->name('document.delete');
Route::get('/document/download/{id}', 'DocumentController@downloadDocument')->name('document.download');
