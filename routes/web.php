<?php

Route::get('/', function () {
    return view('site.pages.index');
})->name('site.index');


Route::get('/login', function () {
    return view('admin.login');
})->name('login');


Route::get('/painel', function(){
    return view('admin.adm-index');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
