<?php

// Dashboard
Route::get('/home', 'DashboardController@index')->name('dashboard');

//=== Page Route ===//
Route::resource('/page', 'PageController');
Route::post('/page/update', 'PageController@updatePage')->name('page.updatepage');

//=== Blog Route ===//
Route::resource('/blog', 'BlogController');

//=== Menu Route ===//
Route::resource('/menu', 'MenuController');
Route::post('/menu/update', 'MenuController@update')->name('menu.update');

//=== Contact Route ===//
Route::resource('contact', 'ContactController');

//=== Subscribe Route ===//
Route::resource('subscribe', 'SubscribeController');

//=== Get new component ===//
Route::get('get/component', 'PageController@getComponent')->name('getComponent');
Route::get('/page/delete/{id}', 'PageController@deletePage')->name('page.delete');

// Media Upload
Route::post('upload/file', 'MediaController@uploadFile')->name('file.upload');

//==== Settings Route ====//
Route::get('settings/general', 'ConfigController@getGeneralSettings')->name('settings.general');
Route::post('settings/general', 'ConfigController@saveGeneralSettings')->name('settings.general.save');

//=== Profile Route ===//
Route::get('profile', 'UserController@profile')->name('profile');
Route::post('profile/update', 'UserController@updateProfile')->name('profile.update');