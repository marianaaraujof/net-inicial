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

Route::get('/equipe', function () {
    return view('equipe');
});

Route::get('/projetos', function () {
    return view('projetos');
});
Route::get('/projetos-2', function () {
    return view('projetos-2');
});
Route::get('/equipe-2', function () {
    return view('equipe-2');
});