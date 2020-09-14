<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/', 'HomeController@index');

Route::get('aboutus', 'HomeController@aboutus');
Route::get('contactus', 'HomeController@contactus');
Route::get('destination', 'HomeController@destination');


Route::get('newslistingdetails', 'HomeController@newslistingdetails');

Route::get('newslisting', 'HomeController@newslisting');
Route::get('standardtours', 'HomeController@standardtours');
Route::get('tourdetails', 'HomeController@tourdetails');
Route::get('tour', 'HomeController@tour');
// Route::get('404', 'HomeController@404');


Route::get('admin', 'AdminController@index');
Route::get('updateProfile', 'AdminController@updateProfile');
Route::any('login', 'AdminController@login')->name('login');






//admin routes
Route::group(['as'=>'admin.','prefix'=>'/admin','middleware' => 'admin'], function () {
    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('logout', 'AdminController@logout')->name('logout');

    Route::any('updateProfile', 'AdminController@updateProfile')->name('updateProfile');

    Route::any('changePassword', 'AdminController@changePassword')->name('changePassword');

    Route::get('getProfile', 'AdminController@getProfile')->name('getProfile');

    Route::any('homepage','AdminController@homePage')->name('homepage');
});

