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
Route::get('a-propos-de-nous', function () {
    return view('front.center_page');
});
Route::get('galerie', function () {
    return view('front.gallery_page');
});
Route::get('faq','FaqController@showFaqClient');

// Route Of Multiple Language
Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//les routes de faqs 
Route::get('faqs','FaqController@getFaqs');
Route::post('faqs/create','FaqController@create');
Route::get('faqForm',function(){
    return view('back.createFaq');
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
Route::post('image/crop', 'GaleryController@imageCropPost');
Route::get('gdetails',function(){
    return view('gdetails');
});
Route::post('create/gallery','GaleryController@create');
Route::get('gallery/list','GaleryController@getGallery');
Route::get('/toCrop/','GaleryController@toCrop');
Route::post('image/gallery','GaleryController@storeImage');
