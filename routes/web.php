<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', ['uses'=> 'App\Http\Controllers\Controller@home']);
Route::get('/xemphim/{alias}/{tap?}', ['uses' => 'App\Http\Controllers\Controller@watch']);
Route::get('/search', ['uses' => 'App\Http\Controllers\Controller@search']);
Route::get('/chi-tiet-phim/{alias}',['uses' => 'App\Http\Controllers\Controller@detail']);

Route::get('/api/list_movie', ['uses' => 'App\Http\Controllers\Controller@list_movie']);

Route::group([
    'prefix'=> 'auth'
], function(){
    Route::get('/', ['uses' => 'App\Http\Controllers\auth\AuthController@showDashboard']);
    Route::get('/menu_categories', function(){
        return view('auth.components.menu_categories');
    });
    Route::get('/product',['uses'=> 'App\Http\Controllers\auth\AuthProductController@list']);
    Route::group([
        'prefix' => 'data'
    ], function(){
        Route::get('/crawler',['uses'=> 'App\Http\Controllers\auth\AuthDataController@crawler']);
        Route::get('/action_crawl',['uses'=> 'App\Http\Controllers\auth\AuthDataController@startCrawler']);
    });
});
