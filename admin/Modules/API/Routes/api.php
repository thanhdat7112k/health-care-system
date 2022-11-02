<?php

// Route::get('/categories/normal', 'CategoryController@getNormalCategories');
// Route::get('/categories/combo', 'CategoryController@getComboCategories');

// Route::get('/menus/{categoryId}', 'MenuController@index');

// Route::get('/category-blogs', 'CategoryBlogController@index');

// Route::get('/blogs/{categoryId}', 'BlogController@index');

// Route::get('/recommendations', 'recommendationController@index');

// Route::get('/products/{categoryId}', 'ProductController@index');

Route::resource('/register', 'Auth\RegisterController');

Route::middleware('auth:api')->group(function () {
    Route::get('/schedules', 'ScheduleController@index');

    Route::get('/user', 'AccountController@index');

    Route::post('account/update-info', 'AccountController@updateInfo');

    Route::post('user/password', 'AccountController@updatePassword');

});
