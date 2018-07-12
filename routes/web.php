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

Route::get('/quemsomos', function () {
    return view('inicial');
});

Route::get('/equipe', function () {
    return view('equipe');
});

Route::get('/hotsite', function () {
    return view('hotsite');
});

Route::get('/qualidade', function () {
    return view('manualdequalidade');
});

Route::get('/projetos', function () {
    return view('projetos');
});