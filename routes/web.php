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
Route::get('/', 'Visitor\\PagesController@getHome')->name('home');
Route::get('/forenbox', 'Visitor\\PagesController@getFORENBOX')->name('forenbox');
Route::get('/gallery', 'Visitor\\PagesController@getGallery')->name('gallery');
Route::get('/products', 'Visitor\\PagesController@getProducts')->name('products');
Route::get('/about', 'Visitor\\PagesController@getAbout')->name('about');
Route::get('/contact', 'Visitor\\PagesController@getContact')->name('contact');
Route::get('/3dmodel', 'Visitor\\PagesController@get3DModel')->name('3dmodel');
Route::post('contact', 'Visitor\\PagesController@postContact')->name('pages.postContact');



