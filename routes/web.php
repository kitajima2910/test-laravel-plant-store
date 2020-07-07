<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

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



Route::group(['middleware' => 'auth'], function () {

    Route::prefix('admin')->group(function() {

        Route::get('/', ['as' => 'admin.index', 'uses' => 'AdminHomeController@index']);

        Route::get('/logout', ['as' => 'admin.logout', 'uses' => 'AdminLoginController@logoutAdmin']);

        Route::prefix('categories')->group(function() {
            Route::get('/', ['as' => 'categories.index' , 'uses' => 'AdminCategoryController@index']);
            Route::get('/ajax/ajaxIndex', 'AdminCategoryController@ajaxIndex');
            Route::get('/create', ['as' => 'categories.create' , 'uses' => 'AdminCategoryController@create']);
            Route::post('/store', ['as' => 'categories.store' , 'uses' => 'AdminCategoryController@store']);
            Route::get('/edit/{id}', ['as' => 'categories.edit' , 'uses' => 'AdminCategoryController@edit']);
            Route::post('/update/{id}', ['as' => 'categories.update' , 'uses' => 'AdminCategoryController@update']);
            Route::get('/destroy/{id}', ['as' => 'categories.destroy' , 'uses' => 'AdminCategoryController@destroy']);
            Route::get('/enable/{id}', ['as' => 'categories.enable' , 'uses' => 'AdminCategoryController@enable']);
        });

        Route::prefix('menus')->group(function() {
            Route::get('/', ['as' => 'menus.index', 'uses' => 'AdminMenuController@index']);
            Route::get('/ajax/ajaxIndex', 'AdminMenuController@ajaxIndex');
            Route::get('/create', ['as' => 'menus.create', 'uses' => 'AdminMenuController@create']);
            Route::post('/store', ['as' => 'menus.store', 'uses' => 'AdminMenuController@store']);
            Route::get('/edit/{id}', ['as' => 'menus.edit' , 'uses' => 'AdminMenuController@edit']);
            Route::post('/update/{id}', ['as' => 'menus.update' , 'uses' => 'AdminMenuController@update']);
            Route::get('/destroy/{id}', ['as' => 'menus.destroy' , 'uses' => 'AdminMenuController@destroy']);
            Route::get('/enable/{id}', ['as' => 'menus.enable' , 'uses' => 'AdminMenuController@enable']);
        });
        
    });

});

Route::group(['middleware' => 'guest'], function () {
    Route::prefix('admin')->group(function() {
        Route::get('/', 'AdminLoginController@index');
        Route::get('/login', ['as' => 'admin.login', 'uses' => 'AdminLoginController@index']);
        Route::post('/login', ['as' => 'admin.login', 'uses' => 'AdminLoginController@loginAdmin']);
    });
});



Route::get('/', function () {
    return view('eshopper.home');
});
