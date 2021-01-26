<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([
    'prefix' => 'v1',

], function ($router) {

    Route::get('/users/login', 'dashboardController@users_login');
    Route::get('/users_list', 'dashboardController@users_list');
    Route::get('/counters','dashboardController@counters');
    Route::get('/charts','dashboardController@charts');
    Route::get('/admin_lists','dashboardController@admin_lists');
    Route::get('/users_list_edit','dashboardController@users_list_edit');
    Route::get('/users_list_edit_confirm','dashboardController@users_list_edit_confirm');
    Route::get('/users_register','dashboardController@users_register');
    Route::get('/project_account_category','dashboardController@project_account_category');
    Route::get('/project_account_summary','dashboardController@project_account_summary');
    Route::get('/project_account_search','dashboardController@project_account_search');
    Route::get('/project_account_form','dashboardController@project_account_form');
    
    Route::get('/generate_payment_plans','dashboardController@generate_payment_plans');
    Route::get('/generate_room_types','dashboardController@generate_room_types');
    Route::get('/generate_equity_types','dashboardController@generate_equity_types');

    Route::get('/users_portfolio_add','dashboardController@users_portfolio_add');
    Route::get('/list_my_portfolios','dashboardController@list_my_portfolios');
    Route::get('/portfolio_transaction_history','dashboardController@portfolio_transaction_history');
    Route::get('/portfolio_transaction_history_add','dashboardController@portfolio_transaction_history_add');

    Route::get('/portfolio_lists','dashboardController@portfolio_lists');
    Route::get('/portfolio_lists_search','dashboardController@portfolio_lists_search');
    
    Route::get('/transaction_lists','dashboardController@transaction_lists');
    Route::get('/transaction_lists_search','dashboardController@transaction_lists_search');
    
   
});

       
