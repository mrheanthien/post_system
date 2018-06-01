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
/*----------------------
Route public
-----------------------*/
//Route::get('check-connection', function () {
//
//    $users = DB::table("users")->get();
//
//    dd($users);
//
//});
//
//
//Route::get('check-connection-2', function () {
//
//    $users = DB::connection("mysql2")->table("users")->get();
//
//    dd($users);
//
//});

Auth::routes();

Route::get('system_logout', ['as'=>'logout','uses'=>'\App\Http\Controllers\Auth\LoginController@logout']);
Route::get('/','AdminhomeController@dashboard');
Route::get('home', 'AdminhomeController@dashboard');
Route::get('admin',['as'=>'view','uses'=>'AdminhomeController@dashboard']);

Route::post('save_general',['as'=>'general.insert','uses'=>'AdminhomeController@add_general']);
Route::get('delete_save/{id}', ['as'=>'delete','uses'=>'AdminhomeController@delete']);

Route::GET('getDistrict',['as'=>'getDistrict','uses'=>'AdminhomeController@getDistrict']);
Route::GET('getCommune',['as'=>'getCommune','uses'=>'AdminhomeController@getCommune']);
Route::GET('getVillage',['as'=>'getVillage','uses'=>'AdminhomeController@getVillage']);



//Route::get('delete_product/{id}', ['as'=>'product.delete','uses'=>'AdminhomeController@destroy_product']);
#Route::get('product', ['as'=>'product.view','uses'=>'AdminhomeController@product']);

