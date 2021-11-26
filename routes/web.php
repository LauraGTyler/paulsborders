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

Route::get('/', 'HomeController@RootFolder' );
Route::get('borders/{id}', 'HomeController@convertpage');
Route::post('/addborders/{id}','HomeController@addborders' );
Route::get('/addborders/{id}','HomeController@addborders' );
Route::get('folder/{id}', 'HomeController@folder');
Route::post('folder/{id}','HomeController@addimagetofolder');
Route::post('/setRootFolder','HomeController@setRootFolder' );

//ajax functions..
Route::get('ajax/savedirectoryimage', 'AjaxController@savedirectoryimage');
Route::get('ajax/savefolderatts', 'AjaxController@savefolderatts');
Route::get('ajax/folderorder', 'AjaxController@folderorder');
Route::get('ajax/imageorder', 'AjaxController@imageorder');
Route::get('/ajax/saveimageatts', 'AjaxController@saveimageatts');
Route::post('/uploadfile', 'AjaxController@uploadfile');

//test function
Route::get('lauraistesting', 'ServerController@lauraistesting' );