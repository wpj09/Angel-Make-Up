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

Route::get('/admin/login', 'UseController@loginAdmin');

Route::get('/admin/home', 'UseController@homeAdmin');

Route::get('/admin/forms', 'UseController@formsAdmin');

Route::get('/login', 'UseController@login');

Route::get('/home', 'UseController@home');

Route::get('/agendamento', 'UseController@agendamento');

Route::get('/contato', 'UseController@contato');

Route::get('/feedback', 'UseController@feedback');

Route::get('/curso-home', 'UseController@cursoHome');

Route::get('/portifolio', 'UseController@portifolio');

Route::get('/curso-cards', 'UseController@cursoCards');
