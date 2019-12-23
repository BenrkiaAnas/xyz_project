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

// Route Pages
Route::get('/', function () {
    return view('front.user_home');
})->name('home');
Route::get('contact-nous', function () {
    return view('front.contact_page');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//les routes de faqs 
Route::get('faqs','FaqController@getFaqs');
Route::post('faqs/create','FaqController@create');
Route::get('faqForm',function(){
    return view('createFaq');
});
// Route Parameter
Route::get('parameter','ParameterController@view');
Route::post('paramter/editPassword','ParameterController@editMyPassword');
Route::get('/logOut','ParameterController@logout');

// Route Contact
Route::post('contact','ContactController@store')->name('create_contact');

// Route Contact Email
Route::get('contact','ContactController@view')->name('add_contact');
Route::post('contactEmail','ContactController@store_email');
