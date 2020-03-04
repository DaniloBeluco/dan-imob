<?php

Route::get('/', 'IndexController@index')->name('site.index');


Route::get('/adm-login', function () {
    return view('admin.pages.login');
})->name('admin.login');


Route::get('/adm-dashboard', function () {
    return view('admin.pages.dashboard');
})->middleware('auth')->name('admin.dashboard');


Route::get('/adm-cadastrar-imovel', 'ImovelController@create')->middleware('auth')->name('admin.cadastrar-imovel');

Route::get('/adm-imoveis', 'ImovelController@index')->middleware('auth')->name('admin.imoveis');

Route::post('/adm-imoveis', 'ImovelController@store')->middleware('auth')->name('admin.imoveis@store');

Route::put('adm-imoveis', 'ImovelController@storeEdit')->middleware('auth')->name('admin.imoveis@storeEdit');

Route::get('/adm-imoveis/deletar/{id}', 'ImovelController@delete')->middleware('auth')->name('admin.imoveis@delete');

Route::get('imoveis/{id}', 'ImovelController@show')->middleware('auth')->name('admin.imoveis@show');

Route::get('imoveis/{id}/edit', 'ImovelController@edit')->middleware('auth')->name('admin.imoveis@edit');

Route::get('imoveis/{id}/detalhes', 'ImovelController@show')->name('site.imoveis@show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
