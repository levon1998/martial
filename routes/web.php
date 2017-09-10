<?php

Route::get('/', 'UsersController@index');
Route::get('/service/{id}', 'UsersController@service')->where('id', '[0-9]+')->name('service');
Route::get('/news/{id}', 'UsersController@post')->where('id', '[0-9]+')->name('post');
Route::get('/images', 'UsersController@allImages');
Route::get('/image/{id}', 'UsersController@allImage')->where('id', '[0-9]+')->name('image');
Route::get('/adminchik/login', 'AuthController@login');
Route::post('/adminchik/login', 'AuthController@login');
Route::get('/adminchik/logout', 'AuthController@logout');

Route::group(['prefix' => '/adminchik', 'middleware' => 'adminCheck'], function(){
    Route::get('/', 'AdminController@index');
    Route::get('/home-texts', 'AdminController@homeTexts');
    Route::get('/delete-home-text/{id}', 'AdminController@deleteHomeText')->where('id', '[0-9]+');
    Route::get('/about-texts', 'AdminController@aboutTexts');
    Route::get('/add-services', 'AdminController@services');
    Route::get('/all-services', 'AdminController@allServices');
    Route::get('/delete-service/{id}', 'AdminController@deleteService')->where('id', '[0-9]+');
    Route::get('/edit-service/{id}', 'AdminController@EditService')->where('id', '[0-9]+');
    Route::get('/teams', 'AdminController@teams');
    Route::get('/all-team', 'AdminController@allTeam');
    Route::get('/delete-team/{id}', 'AdminController@deleteTeam')->where('id', '[0-9]+');
    Route::get('/edit-team/{id}', 'AdminController@editTeam')->where('id', '[0-9]+');
    Route::get('/news', 'AdminController@news');
    Route::get('/all-news', 'AdminController@allNews');
    Route::get('/delete-news/{id}', 'AdminController@deleteNews')->where('id', '[0-9]+');
    Route::get('/edit-news/{id}', 'AdminController@editNews')->where('id', '[0-9]+');
    Route::get('/prices', 'AdminController@prices');
    Route::get('/all-prices', 'AdminController@allPrice');
    Route::get('/delete-price/{id}', 'AdminController@deletePrice')->where('id', '[0-9]+');
    Route::get('/edit-price/{id}', 'AdminController@editPrice')->where('id', '[0-9]+');
    Route::get('/subscribes', 'AdminController@subscribes');
    Route::get('/add-folder', 'AdminController@addFolder');
    Route::get('/add-image', 'AdminController@addImage');
    Route::get('/all-images/{id?}', 'AdminController@allImages');
    Route::get('/all-folders', 'AdminController@allFolders');
    Route::get('/contact-user', 'AdminController@ContactUser');

    Route::post('/home-texts', 'AdminController@homeTexts');
    Route::post('/home-texts-edit', 'AdminController@homeTextsEdit');
    Route::post('/about-texts', 'AdminController@aboutTexts');
    Route::post('/services', 'AdminController@services');
    Route::post('/edit-service/{id}', 'AdminController@EditService')->where('id', '[0-9]+');
    Route::post('/teams', 'AdminController@teams');
    Route::post('/edit-team/{id}', 'AdminController@editTeam')->where('id', '[0-9]+');
    Route::post('/news', 'AdminController@news');
    Route::post('/edit-news/{id}', 'AdminController@editNews')->where('id', '[0-9]+');
    Route::post('/prices', 'AdminController@prices');
    Route::post('/add-folder', 'AdminController@addFolder');
    Route::post('/add-image', 'AdminController@addImage');
    Route::post('/save-ordering', 'AdminController@saveOrdering');
    Route::post('/delete-image', 'AdminController@deleteImage');
    Route::post('/contact-user', 'AdminController@ContactUser');
    Route::post('/edit-price/{id}', 'AdminController@editPrice')->where('id', '[0-9]+');
});

Route::post('/contact', 'UsersController@contact');