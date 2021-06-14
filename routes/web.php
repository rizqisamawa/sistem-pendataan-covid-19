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
//main-view data
Route::get('/','CovidController@beranda');
Route::get('/tt','CovidController@tt');
Route::get('/rujukan','CovidController@rujukan');
Route::get('/kebijakan','CovidController@kebijakan');
Route::get('/tentang','CovidController@tentang');
//main-view data

//login
Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/takun','AuthController@takun')->middleware('auth');
Route::post('/takun/postakun','AuthController@postakun');
Route::get('/logout','AuthController@logout');
//login

//admin-penambahandata
Route::get('/todp','AdminController@todp')->middleware('auth');
Route::post('/todp/odp','AdminController@odp');
Route::get('/todp/hodp/{idodp}','AdminController@hodp')->middleware('auth');

Route::get('/tpdp','AdminController@tpdp')->middleware('auth');
Route::post('/tpdp/pdp','AdminController@pdp');
Route::get('/tpdp/hpdp/{idpdp}','AdminController@hpdp')->middleware('auth');

Route::get('/tpositif','AdminController@tpositif')->middleware('auth');
Route::post('tpositif/positif','AdminController@positif');
Route::get('tpositif/hpositif/{idpositif}','AdminController@hpositif')->middleware('auth');

Route::get('/trujukan','AdminController@trujukan')->middleware('auth');
Route::post('/trujukan/prujukan','AdminController@prujukan');
Route::get('/trujukan/hrs/{idrs}','AdminController@hrs')->middleware('auth');
//admin-penambahandata

//export
Route::get('/todp/odpexport','AdminController@exodp')->middleware('auth');
Route::get('/tpdp/pdpexport','AdminController@expdp')->middleware('auth');
Route::get('/tpositif/positifexport','AdminController@expositif')->middleware('auth');
//export