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

Auth::routes();

/**
 * Pages on Front-end Routes
 */
Route::get('/', 'Frontend\PagesController@index')->name('pages.index');
Route::get('{slug}', 'Frontend\PagesController@getPage')->name('pages.get');

Route::get('/money-project/test', 'Frontend\PagesController@test')->name('page.test');

/**
 * Contact route
 */
Route::post('/contact-us', 'Frontend\ContactController@saveContact')->name('frontend.contact');

/**
 * Subscribe route
 */
Route::post('/subscribe', 'Frontend\ContactController@saveSubscribe')->name('frontend.subscribe');

// Admin
Route::group(['prefix' => 'dashboard', 'as' => 'admin.', 'namespace' => 'Backend', 'middleware' => 'auth'], function () {

    /*
     * These routes need view-backend permission
     * (good if you want to allow more than one group in the backend,
     * then limit the backend features by different roles or permissions)
     *
     * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
     * These routes can not be hit if the password is expired
     */
    include(__DIR__ . '/admin-routes.php');
});
