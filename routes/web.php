<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('usuarios', 'UserController');
Route::resource('roles', 'RoleController');

//Rutas para nuestra sección de Notas
Route::resource('/notas/todas', 'NotasController');
Route::get('/notas/favoritas', 'NotasController@favoritas');
Route::get('/notas/archivadas', 'NotasController@archivadas');
