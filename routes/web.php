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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//les routes de faqs 
Route::get('faqs','FaqController@getFaqs');
Route::post('faqs/create','FaqController@create');
Route::get('faqForm',function(){
    return view('createFaq');
});
//la route d'edition de faq
Route::get('editFaq/{id}','FaqController@edit');
//la route d'update' de faq
Route::post('faqs/update/{id}','FaqController@update');
//la route d'activatio/desactive une FAQ
Route::get('/faqs/activeDesactive','FaqController@activeDesactive');
Route::get('/galery',function(){
    return view('galery');
});
Route::post('tester','GaleryController@tester');
Route::get('image-crop', 'GaleryController@imageCrop');
Route::post('image-crop', 'GaleryController@imageCropPost');