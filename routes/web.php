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
    return view('site.pages.home');
});

Route::get('/blog', function () {
    return view('site.pages.blog');
});

Route::get('/sobre', function () {
    return view('site.pages.about');
});

Route::get('/parceiros', function () {
    return view('site.pages.partners');
});

//Sugestão, Enviar para a noticia seus devido dados e tratar dinamicamente na própria blade
Route::get('/blog/{id}', function () {
    return view('site.components.singleNotice');
});

Route::get('/projetos', function () {
    return view('site.pages.projects');
});
