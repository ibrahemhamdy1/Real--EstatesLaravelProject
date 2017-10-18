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
Route::group(['middleware'=>['web','admin']],function(){
    #dataTable  ajax 
     Route::get('/adminpanel/users/data',['as'=>'adminpanel.user.data','uses'=>'UsersController@anyData']);
     Route::get('/adminpanel/bu/data',['as'=>'adminpanel.user.data','uses'=>'BuildingController@anyData']);
     Route::get('/adminpanel','AdminController@index');
     Route::resource('/adminpanel/users','UsersController');
     Route::post('/adminpanel/users/changePassword/','UsersController@UpdatePassword');
     Route::get('/adminpanel/users/{id}/delete','UsersController@destroy');
     Route::resource('/adminpanel/sitesetting','SiteSettingController');
     Route::resource('/adminpanel/bu','BuildingController');

   
});
/*user*/
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ShowAllBulding','BuildingController@showAllEnable');

Route::get('/ForRent','BuildingController@ForRent');
Route::get('/ForBuy','BuildingController@ForBuy');

Route::get('/type/{type}','BuildingController@ShowBytype');
Route::get('/search/','BuildingController@search');
Route::get('/singleBuilding/{id}','BuildingController@ShowSingle');
