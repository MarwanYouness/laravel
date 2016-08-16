<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

 Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect' ]
    ], function()
    {
        /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
        Route::get('/','GuestController@index');
        Route::get('home','HomeController@index');
        Route::get('categories/create','CategoriesController@create');
        Route::get('categories','CategoriesController@index');
        Route::post('/categories','CategoriesController@store');
        Route::get('categories/show','CategoriesController@allcat');
        Route::post('/categories','CategoriesController@update');
        Route::get('categories/remove','CategoriesController@remove');
        Route::get('categories/{id}','CategoriesController@list');
        Route::get('posts/{id}','PostController@show');
        Route::get('categories/{id}/edit','CategoriesController@edit');
        Route::post('deletecat/{id}','CategoriesController@delete');
       
    });


