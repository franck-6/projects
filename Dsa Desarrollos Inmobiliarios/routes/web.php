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

Route::get('/demo', function () {
    return view('demo');
});

Route::get('/', 'HomeController@index');

Route::get('contact', 'HomeController@contact');
Route::post('/send_contact', 'HomeController@send_contact');

Route::get('/about', 'HomeController@about');

Route::get('/projects', 'BuildingController@index');

Route::get('/exports/planos/{filename}', function($plano){

	$file =public_path('storage/buildings/planos') . '/' . $plano->image; // or wherever you have stored your PDF files

	dd($file);
    return response()->download($file);

});

Route::get('/news', 'HomeController@blog');

Route::get('/services', 'HomeController@services');

Route::get('projects/search', 'BuildingController@search');

Route::get('/building/{id}','BuildingController@show');

Route::get('/propuesta','LeadController@create');

Route::post('/send_opportunity','LeadController@search');

Route::post('/data', 'LeadController@additional_data');

//Route::get('categoria/{id}', 'CategoryController@show');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/nota/{id}', 'PostController@show');

Route::resource('buildings', 'BuildingController');

Route::resource('galleryBuildings', 'GalleryBuildingController');

Route::resource('imgFlats', 'imgFlatsController');

Route::resource('locations', 'LocationController');

Route::resource('imgFlats', 'imgFlatController');

Route::resource('rooms', 'RoomController');

Route::resource('roomNumbers', 'RoomNumberController');

Route::resource('posts', 'PostController');

Route::resource('categories', 'CategoryController');