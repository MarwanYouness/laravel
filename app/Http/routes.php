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
        Route::get('categories/{id}/delete', ['uses' => 'CategoriesController@delete']);
        Route::get('user/{id}/delete', ['uses' => 'UserController@delete']);
        Route::get('user/create','UserController@create');
        Route::post('user/store','UserController@store');
        Route::get('user/list','UserController@list');
        Route::post('user/update','UserController@update');
        Route::get('user/{id}/edit','UserController@edit');
        Route::get('user/create','UserController@create');
        Route::post('user/store','UserController@store');
        Route::get('user/remove','UserController@remove');
        Route::get('post/list','PostController@list');
        Route::post('post/update','PostController@update');
        Route::get('post/{id}/edit','PostController@edit');
        Route::get('post/{id}/delete', ['uses' => 'PostController@delete']);
        Route::get('post/remove','PostController@remove');
    });


