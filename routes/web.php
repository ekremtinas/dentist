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

Route::get('/','Index\GetIndexController@index')->name('getIndex');


Route::get('/Prof-Dr-Faruk-Ayhan-BASCİFTCİ','About\GetCVController@index')->name('getCV');

Route::get('/Yayinlar','About\GetPublishController@index')->name('getPublish');

Route::get('/Ortodonti-nedir','Ortodonti\GetOrtodontiController@index')->name('getOrtodonti');
Route::get('/Ortodontik-anomaliler','Ortodonti\GetOrtAnimallerController@index')->name('getOrtAnimaller');
Route::get('/Ortodonti-SSS','Ortodonti\GetOrtSSSController@index')->name('getOrtSSS');
Route::get('/Ortodonti-Eriskinlerde-Tedavi','Ortodonti\GetOrtErTedaviController@index')->name('getOrtErTedavi');

Route::get('/Galeri','Gallery\GetGalleryController@index')->name('getGallery');

Route::get('/İletisim','Contact\GetContactController@index')->name('getContact');

Route::get('/AdminLogin','Admin\Login\GetAdminLoginController@index')->name('getAdminLoginIndex');

    Route::get('/Admin','Admin\Index\GetIndexController@index')->name('getAdminIndex');
