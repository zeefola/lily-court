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
Route::get('/tour',['uses'=>'homepageController@tour']);
Route::get('/applicationForm',['uses'=>'formSubmissionController@applicationForm']);
Route::get('/messageForm',['uses'=>'formSubmissionController@messageForm']);
Route::get('/appointmentForm',['uses'=>'formSubmissionController@appointmentForm']);

Route::any('/lilycourt/users/register',['uses'=>'calvaryController@users_register']);

/** Project 130 */
Route::get('/project-130', 'ProjectController@project_130');
Route::post('/project_130_contact', 'ProjectController@projectContactConfirm');
Route::post('/project-130-contact', 'ProjectController@contactConfirm');