<?php

use Illuminate\Support\Facades\Route;

/*Страницы сайта*/

Route::get('/', 'PageController@home')->name('home');

/*Регистрация и авторизация*/

Route::get('/registration', 'AuthController@showRegistration')->name('registration_show');
Route::post('/registration', 'AuthController@registration')->name('registration');

Route::get('/login', 'AuthController@showLogin')->name('login_show');
Route::post('/login', 'AuthController@login')->name('login');

/*Заявки*/

Route::get('/applications', 'ApplicationController@index')->name('applications');
Route::get('/application/{id}', 'ApplicationController@show')->name('application.show');

/*Пользователь*/

Route::group(['prefix' => 'profile', 'middleware' => 'auth'], function () {
    Route::get('/', 'UserController@profile')->name('profile');
    Route::post('/update', 'UserController@update')->name('profile.update');
    Route::get('/logout', 'AuthController@logout')->name('logout');

    /*Создание заявки*/
    Route::post('/create', 'ApplicationController@create')->name('application.create');
    Route::get('/create', 'ApplicationController@showCreate')->name('application.create-show');

    /*Заявка*/
    Route::get('/show/{id}/delete', 'ApplicationController@delete')->name('application.delete');
});

/*Панель администратора*/

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', 'Admin\PageController@index')->name('admin');

    /*Обновление заявки*/
    Route::post('/application/{id}', 'Admin\ApplicationController@update')->name('application.update');

    /*Категории*/
    Route::get('/categories/{id}', 'Admin\CategoryController@showUpdate')->name('category.update_show');
    Route::post('/categories/{id}', 'Admin\CategoryController@update')->name('category.update');
    Route::get('/categories/{id}/delete', 'Admin\CategoryController@delete')->name('category.delete');
    Route::post('/categories/create', 'Admin\CategoryController@create')->name('category.create');
});
