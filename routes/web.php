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
Route::get('locale/{locale?}',array('as'=>'set-locale','uses'=>'AppController@setLocale')); 
Route::get('/','HomesController@home')->name('/');
Route::get('portfolio','HomesController@portfolio')->name('portfolio');
Route::get('blog','HomesController@blog')->name('blog');
Route::get('blog-details','HomesController@blogdetail')->name('blog-details');
Route::post('/message','HomesController@message')->name('message');
Route::get('contact','HomesController@contact')->name('contact');
Route::get('website','HomesController@website')->name('website');
Route::get('seo','HomesController@seo')->name('seo');
Route::get('smm','HomesController@smm')->name('smm');
Route::get('logo','HomesController@logo')->name('logo');
Route::get('video','HomesController@video')->name('video');
Route::get('ppc','HomesController@ppc')->name('ppc');
Route::get('single','HomesController@single')->name('single');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'admin'], function () {
	Route::get('/devadmin','AdminController@admin')->name('/devadmin');
	Route::resource('/aportfolio','PortfolioController');
	Route::resource('/ablog','BlogController');
});
