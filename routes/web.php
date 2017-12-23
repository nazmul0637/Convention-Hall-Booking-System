<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', 'PagesController@index');
    Route::get('/convention/show/{id}', 'ConventionHallController@show')->name('convention.show');
    

});


Route::group(["middleware" => ['auth', 'admin']], function () {

	Route::get('/adminhome', [
		'as' => 'adminhome', 'uses' => 'AdminController@admin'
	]);
	

    Route::get('/convention/index', 'ConventionHallController@index')->name('convention.index');
   	Route::get('/convention/create', 'ConventionHallController@create')->name('convention.create');
    Route::post('/convention/store', 'ConventionHallController@store')->name('convention.store');

    

    Route::get('/convention/delete/{id}', 'ConventionHallController@destroy');


    


});

Route::group(["middleware" => ['auth', 'manager']], function () {

	Route::get('/managerhome', [
		'as' => 'managerhome', 'uses' => 'ManagerController@manager'
	]);

    Route::get('/reservationlist', 'ReservationController@index')->name('reservation.list');

    Route::get('/foodmenu/index', 'FoodmenuController@index')->name('foodmenu.index');
	Route::get('/foodmenu/create', 'FoodmenuController@create')->name('foodmenu.create');
    Route::post('/foodmenu/store', 'FoodmenuController@store')->name('foodmenu.store');

    Route::get('/foodmenu/edit/{id}', 'FoodmenuController@edit')->name('foodmenu.edit');

    Route::post('/foodmenu/update', 'FoodmenuController@update')->name('foodmenu.update');

    Route::get('/foodmenu/{id}', 'FoodmenuController@show')->name('foodmenu.show');

    Route::get('/foodmenu/delete/{id}', 'FoodmenuController@destroy')->name('foodmenu.delete');


    Route::get('/venue/index', 'VenueController@index')->name('venue.index');
    Route::get('/venue/create', 'VenueController@create')->name('venue.create');
    Route::post('/venue/store', 'VenueController@store')->name('venue.store');

    Route::get('/venue/edit/{id}', 'VenueController@edit')->name('venue.edit');

    Route::post('/venue/update', 'VenueController@update')->name('venue.update');

    Route::get('/venue/show/{id}', 'VenueController@show')->name('venue.show');

    Route::get('/venue/delete/{id}', 'VenueController@destroy')->name('venue.delete');


    Route::get('/map/create', 'MapController@create')->name('map.create');
    Route::post('/map/store', 'MapController@store')->name('map.store');

    Route::get('/map/edit/{id}', 'MapController@edit')->name('map.edit');

    Route::post('/map/update', 'MapController@update')->name('map.update');

    Route::get('/map/show/{id}', 'MapController@show')->name('map.show');

    Route::get('/map/delete/{id}', 'MapController@destroy')->name('map.delete');


});


Route::group(["middleware" => ['auth', ('manager'||'admin')]], function () {

    Route::get('/convention/edit/{id}', 'ConventionHallController@edit')->name('convention.edit');

    Route::post('/convention/update', 'ConventionHallController@update')->name('convention.update');

    

    });

Route::group(["middleware" => ['auth', 'user']], function () {

    Route::get('/home', [
        'as' => 'home', 'uses' => 'UserController@user'
    ]);

    Route::get('/reservation/create/{id}', 'ReservationController@create')->name('reservation.create');
    Route::post('/reservation/store', 'ReservationController@store')->name('reservation.store');
    });

Route::group(["middleware" => ['auth', ('manager'||'admin'||'user')]], function () {

    

    });

Auth::routes();
