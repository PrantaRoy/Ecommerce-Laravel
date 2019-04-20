<?php


Route::get('/', function () {
    return view('pages.index');


});
Route::get('/index', 'PagesController@index')->name('index');
Route::get('/products', 'PagesController@products')->name('products');
Route::get('/contact', 'ContactController@index')->name('contact');