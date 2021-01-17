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
    return view('frontend.index');
})->name('index');

Route::get('/gallery', function(){
    return view('frontend.gallery');
})->name('gallery');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::name('dashboard.')->middleware('auth')->namespace('Admin')->prefix('dashboard')->group(function() {

    Route::get('/', 'ImageController@index')->name('index');
    Route::get('images/create/public', 'ImageController@createPublic')->name('images.create.public');
    Route::get('images/create/private', 'ImageController@createPrivate')->name('images.create.private');
    Route::post('images', 'ImageController@store')->name('images.store');
    Route::delete('images', 'ImageController@destroy')->name('images.delete');
    Route::get('images/{image:image}', 'ImageController@getImage');

});
