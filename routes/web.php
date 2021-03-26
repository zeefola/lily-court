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

###### homepageController
Route::get('/',['uses'=>'homepageController@welcome']);
Route::get('/applicationForm',['uses'=>'formSubmissionController@applicationForm']);
Route::get('/messageForm',['uses'=>'formSubmissionController@messageForm']);
Route::get('/appointmentForm',['uses'=>'formSubmissionController@appointmentForm']);

Route::any('/lilycourt/users/register',['uses'=>'calvaryController@users_register']);

/** Mother's Day Promo */
Route::get('/easter-promo', 'promoController@promo');
Route::post('/easter-promo-contact', 'promoController@contactConfirm');