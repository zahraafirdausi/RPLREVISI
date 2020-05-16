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
//tambahan baru
//Route::post('/test', function(\Illuminate\Http\Request $request) {
    //return $request->all();
//});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/order', 'PelangganController@create');
Route::post('/order/store', 'PelangganController@store');
Route::get('/riwayat', 'PelangganController@tampilin');
Route::get('/reward', 'PelangganController@reward');
Route::get('/', 'PagesController@home');
Route::get('/signin', 'PagesController@masuk')->middleware('guest')->name('signin');

Auth::routes();
//home ke laravel
Route::get('/home', 'HomeController@index')->name('home');
//home ke halaman awal yang da regis+login
//Route::get('/home', 'PagesController@home')->name('home');