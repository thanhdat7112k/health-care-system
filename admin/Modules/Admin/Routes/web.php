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

Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login','Auth\LoginController@login')->name('login');
    Route::get('/logout','Auth\LoginController@logout')->name('logout');

    Route::middleware(['auth:admin'])->group(function () {
        //disease
        Route::resource('diseases', DiseaseController::class);

        //profile
        Route::get('/profiles', 'ProfileController@edit')->name('profiles.edit');
        Route::put('/profiles', 'ProfileController@update')->name('profiles.update');

        //customer
        Route::resource('customers', CustomerController::class);

        // Category Product
        Route::resource('recommendations', recommendationController::class);

        Route::resource('symptoms', symptomController::class);


        // //category-blogs
        Route::resource('histories', MedicalHistoriesController::class);

        // // Reports
        Route::resource('feedbacks', FeedbackController::class);

    });
});


