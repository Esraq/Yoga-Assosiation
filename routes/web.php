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



Auth::routes();


Route::get('/', 'IndexController@index');
Route::get('member', 'MemberController@index');
Route::get('gallery', 'GallerController@index');
Route::get('about', 'CommunicationController@index');
Route::get('comments', 'opinionController@index');






Route::get('/home', 'HomeController@index')->name('home');


Route::get('/insert','StudInsertController@insertform')->name('home');
Route::post('create','StudInsertController@insert')->name('home');


Route::get('image-gallery', 'ImageGalleryController@index')->name('home');
Route::get('gallery', 'GallerController@index');

Route::post('image-gallery', 'ImageGalleryController@upload');
Route::delete('image-gallery/{id}', 'ImageGalleryController@destroy');


Route::get('pdf-gallery', 'PdfController@index')->name('home');
Route::post('pdf-gallery', 'PdfController@upload');
Route::delete('pdf-gallery/{id}', 'PdfController@destroy');

Route::get('event', 'FileController@index');

Route::get('yoga','CommunicationController@defination');

Route::get('yoga_benefit','CommunicationController@benefit');

Route::get('history','CommunicationController@test');

Route::get('contact','CommunicationController@test1');

Route::get('yoga_types','CommunicationController@test2');

Route::get('1','CommunicationController@test3');


Route::get('2','CommunicationController@test4');


Route::get('3','CommunicationController@test5');



Route::get('4','CommunicationController@test6');


Route::get('5','CommunicationController@test7');

Route::get('6','CommunicationController@test8');


Route::get('7','CommunicationController@test9');




Route::get('8','CommunicationController@test10');


Route::get('guide','CommunicationController@test11');


Route::get('video','CommunicationController@test12');




Route::get('eisty','UserController@index');

Route::get('insert','UserController@insertform');
Route::post('create','UserController@insert');

Route::get('eisty','UserController@index');

Route::get('history_panel','First_Page_Controller@index');















Route::get('book/{id}',function($id){

    return "Detail of book of id => $id";

});







