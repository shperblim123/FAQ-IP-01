<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard.home');
Route::get('/dashboard/contact', 'DashboardController@contact')->name('dashboard.contact');
Route::get('/dashboard/faqs', 'FaqController@index')->name('faqs.list');
//Create
Route::get('/dashboard/faqs/new', 'FaqController@displayCreate')->name('faqs.displayCreate');
Route::post('/dashboard/faqs', 'FaqController@create')->name('faqs.create');
//Edit
Route::get('/dashboard/faqs/edit/{id}', 'FaqController@displayEdit')->name('faqs.displayEdit');
Route::post('/dashboard/faqs/edit/{id}', 'FaqController@edit')->name('faqs.edit');

//Delete

Route::get('dashboard/faqs/{id}/delete', 'FaqController@Delete')->name('faqs.delete');




