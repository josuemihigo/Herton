<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

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


    // return view('home');
     return view('home');

});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');



Route::post('/newUser', 'AdminController@create')->name('newUser');
Route::get('/newUser', 'AdminController@newUser');



Route::get('/apropos', 'HomeController@apropos');
Route::get('/blog', 'HomeController@blog');
Route::get('/contact', 'HomeController@contact');
Route::get('/faq', 'HomeController@faq');

Route::post('/Contacts', 'ContactController@create');
Route::post('/updatecontact', 'ContactController@updatecontact');
Route::get('/contactliste', 'ContactController@contactliste');
Route::get('/contact/{contact}', 'ContactController@show');
Route::get('/contact/{contact}/edit', 'ContactController@edit');
Route::patch('/contact/{contact}', 'ContactController@update');





 // route Articles
 Route::post('/articles', 'ArticlesController@store');
 Route::get('/articles', 'ArticlesController@index');
 Route::get('/articles/create', 'ArticlesController@create');
 Route::post('/articles/update{article}', 'ArticlesController@update');
 Route::get('/articles/delete/{article}', 'ArticlesController@destroy');
// route faq





//admin
// route contact
Route::resource('/contacts', 'ContactController');

 // route formation
 Route::resource('/formations', 'FormationController');

// route faq

//formateurs
Route::resource('formateurs', 'FormateurController');


/// route client
Route::resource('clients', 'ClientController');
// route  entreprise
//route blog
Route::resource('blogs', 'Blogcontroller');
// blog
//faq
Route::resource('faqs', 'faqController');
//apropos
Route::resource('aproposs', 'AproposController');
// Route::get('aproposs/{aproposs}','AproposController@update' );
//description faq  c'est a dire les grandes ligne de faq le menu de faq
Route::resource('descfaqs', 'DescfaqController');

Route::resource('/admin/users', 'Admin\UsersController');
Route::resource('/admin/clients', 'Admin\ClientsController');
