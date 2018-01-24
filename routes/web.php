<?php


Route::get('/',[
    'uses' => 'portfolioController@index',
    'as' => '/'
]);

Route::get('about-us',[
    'uses' => 'portfolioController@aboutUs',
    'as' => 'about-us'
]);

Route::get('projects',[
    'uses'  => 'portfolioController@projects',
    'as'    => 'projects'
]);

Route::get('gallery',[
    'uses' => 'portfolioController@gallery',
    'as' => 'gallery'
]);
Route::get('contact-us',[
    'uses' => 'portfolioController@contactUs',
    'as' => 'contact'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
