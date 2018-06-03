<?php

Route::group([], function () {
    Route::get('/', 'HomeController@indexx');


    Route::get('/about', function () {
        return view('home.about');
    });

    Route::get('/forms', function () {
        return view('home.forms');
    });

    Route::get('/contact', function () {
        return view('home.contact');
    });

    Route::get('/projects', function () {
        return view('home.projects');
    });

    Route::get('/group','HomeController@show_profosor');

});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::get('/index', function () {
        return view('dash.index');
    });
    Route::get('/froms', 'NewsController@index');
    Route::get('/forms/add', 'NewsController@create');

    Route::post('/forms/add', 'NewsController@storee');
    Route::delete('/forms/add/{id}', 'NewsController@delete')->name('form.delete');

    Route::get('/forms/{id}/edit', 'NewsController@edit')->name('form.edit');
    Route::patch('/forms/update/{id}', 'NewsController@update');


    Route::get('/profosor', 'ProfosorController@indexx');
    Route::get('/profosor/create', 'ProfosorController@createe');

    Route::post('/profosor/store', 'ProfosorController@storee');
    Route::delete('/profosor/delete/{id}', 'ProfosorController@delete')->name('profosor.delete');

    Route::get('/profosor/{id}/edit', 'ProfosorController@edit')->name('profosor.edit');
    Route::patch('/profosor/update/{id}', 'ProfosorController@update');
});


